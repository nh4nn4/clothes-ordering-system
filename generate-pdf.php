<?php
require_once('./dompdf/autoload.inc.php');
include('DBConnection.php');

use Dompdf\Dompdf;

/* 1. input */
$month = str_pad(filter_input(INPUT_GET, 'month', FILTER_SANITIZE_NUMBER_INT), 2, '0', STR_PAD_LEFT);
$year = filter_input(INPUT_GET, 'year', FILTER_SANITIZE_NUMBER_INT);
if (!$month || !$year) {
    die('Missing month or year');
}

/* 2. data */
$sql = "
SELECT  p.prodName,
        SUM(od.order_detailQuantity)                        AS qty_sold,
        SUM(od.order_detailQuantity * od.order_detailPrice) AS sales_amount
FROM        order_detail   od
JOIN        orders         o  ON o.orderID = od.orderID
JOIN        product        p  ON p.prodID = od.prodID
WHERE       MONTH(o.orderDate) = ? 
        AND YEAR(o.orderDate)  = ?
        AND o.orderStatus IN ('C', 'P')
GROUP BY    p.prodID
ORDER BY    sales_amount DESC";
$stmt = $connect->prepare($sql);
$stmt->bind_param('ii', $month, $year);
$stmt->execute();
$rows = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

$totalMonth = array_sum(array_column($rows, 'sales_amount'));

$grandRes = $connect->query("
    SELECT SUM(od.order_detailQuantity * od.order_detailPrice) AS grand
    FROM   order_detail od
    JOIN   orders o ON o.orderID = od.orderID
    WHERE  o.orderStatus IN ('C', 'P')");
$grandTotal = $grandRes->fetch_assoc()['grand'] ?? 0;

/* 3. html */
ob_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #aaa;
            padding: 6px;
            text-align: right;
        }

        th:first-child,
        td:first-child {
            text-align: left;
        }

        thead th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        tfoot tr {
            background-color: #e0f7fa;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>Waveline Apparel Sales Report – <?= date('F Y', mktime(0, 0, 0, $month, 1, $year)) ?></h2>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Sales (RM)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r): ?>
                <tr>
                    <td><?= htmlspecialchars($r['prodName']) ?></td>
                    <td><?= $r['qty_sold'] ?></td>
                    <td><?= number_format($r['sales_amount'], 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">Total (<?= date('F Y', mktime(0, 0, 0, $month, 1, $year)) ?>)</th>
                <th><?= number_format($totalMonth, 2) ?></th>
            </tr>
            <tr>
                <th colspan="2">Grand Total (all time)</th>
                <th><?= number_format($grandTotal, 2) ?></th>
            </tr>
        </tfoot>
    </table>
</body>

</html>
<?php $html = ob_get_clean();

/* 4. pdf */
$dompdf = new Dompdf(['isHtml5ParserEnabled' => true]);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("sales-report-$year-$month.pdf", ['Attachment' => true]);
