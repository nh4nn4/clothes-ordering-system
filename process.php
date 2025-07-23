<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];

    // Example: Save to file or database here
    $data = "Height: $height cm, Weight: $weight kg, Gender: $gender\n";
    file_put_contents("submissions.txt", $data, FILE_APPEND);

    echo "Form submitted successfully!";
} else {
    echo "Invalid request.";
}
?>
