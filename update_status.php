<?php
$conn = new mysqli("localhost", "root", "", "burgundy_inn");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $status = $_POST["status"];
    
    $stmt = $conn->prepare("UPDATE messages SET status=? WHERE id=?");
    $stmt->bind_param("si", $status, $id);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => "Failed to update status"]);
    }
    
    $stmt->close();
}
$conn->close();
?>
