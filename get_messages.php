<?php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "", "burgundy_inn");

if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed"]));
}

$sql = "SELECT * FROM messages";
$result = $conn->query($sql);

$messages = [];
while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
}

echo json_encode($messages);
$conn->close();
?>
