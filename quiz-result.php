// quiz_result.php
<?php
// Receive user answers (e.g., as POST data)
$answers = $_POST['answers']; // array of selected choices

// Initialize scores
$scores = [
    'Minimalist' => 0,
    'Boho' => 0,
    'Streetwear' => 0,
    'Preppy' => 0
];

// Example scoring
foreach ($answers as $answer) {
    switch ($answer) {
        case 'sneakers':
            $scores['Streetwear']++;
            break;
        case 'loafers':
            $scores['Preppy']++;
            break;
        case 'earth_tones':
            $scores['Boho']++;
            break;
        case 'neutrals':
            $scores['Minimalist']++;
            break;
        // Add more cases as needed
    }
}

// Find top aesthetic
$topStyle = array_keys($scores, max($scores))[0];

// Connect to database and fetch matching products
$conn = new mysqli('localhost', 'username', 'password', 'database');

$sql = "SELECT * FROM products WHERE style_tag = '$topStyle'";
$result = $conn->query($sql);

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

// Return JSON
echo json_encode([
    'aesthetic' => $topStyle,
    'products' => $products
]);
?>
