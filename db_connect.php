<?php
$servername = "localhost";  // OR "127.0.0.1"
$username = "root";
$password = "";  // Default is empty in XAMPP
$dbname = "users_db";
$port = 3307; 


$conn = new mysqli("localhost", "root", "", "users_db", 3306);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



