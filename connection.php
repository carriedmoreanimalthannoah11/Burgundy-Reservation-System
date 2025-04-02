<?php
$host = "localhost"; // Change if your database is hosted elsewhere
$username = "root";  // Default XAMPP user
$password = "";      // Default XAMPP password (leave empty)
$database = "users_db";

$conn = new mysqli("localhost", "root", "", "users_db", 3306);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
