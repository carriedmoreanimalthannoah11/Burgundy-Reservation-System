<?php
include('db_connect.php'); // Make sure this file is correctly set up

// Example reservation data (replace with user input)
$user_id = 1;  // Change this based on the logged-in user
$room_id = 2;  // Select an available room
$checkin_date = '2025-03-28';
$checkin_time = '12:00:00';
$stay_duration = 5;
$checkout_date = '2025-03-28';
$checkout_time = '17:00:00';
$total_price = 2000;
$payment_method = 'gcash';
$status = 'confirmed';

// Prepare SQL query
$query = "INSERT INTO reservations (user_id, room_id, checkin_date, checkin_time, stay_duration, checkout_date, checkout_time, total_price, payment_method, status) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($query);
$stmt->bind_param("iississdss", $user_id, $room_id, $checkin_date, $checkin_time, $stay_duration, $checkout_date, $checkout_time, $total_price, $payment_method, $status);

if ($stmt->execute()) {
    // Get the automatically generated reservation_id
    $reservation_id = $stmt->insert_id;
    echo "New Reservation ID: " . $reservation_id;

    // Redirect to receipt page
    header("Location: receipt.php?reservation_id=" . $reservation_id);
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>