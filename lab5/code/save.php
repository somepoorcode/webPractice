<?php
function getOutNow(): void
{
    header('Location: /');
    exit();
}

if (false === isset($_POST['mail'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    getOutNow();
}

$mail = $_POST['mail'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$conn = new mysqli("db", "root", "1111", "web");


$stmt = $conn->prepare("INSERT INTO ad (email, title, description, category) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $mail, $title, $description, $category);

if ($stmt->execute() === TRUE) {
    getOutNow();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
