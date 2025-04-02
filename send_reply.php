<?php
$conn = new mysqli("localhost", "root", "", "burgundy_inn");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $reply = $_POST["reply"];
    
    $stmt = $conn->prepare("UPDATE messages SET reply=? WHERE id=?");
    $stmt->bind_param("si", $reply, $id);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => "Failed to send reply"]);
    }
    
    $stmt->close();
}
$conn->close();
?>
