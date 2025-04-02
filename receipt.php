<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $room = htmlspecialchars($_POST['room']);
    $checkin = htmlspecialchars($_POST['checkin']);
    $checkin_time = htmlspecialchars($_POST['checkin_time']);
    $checkout = htmlspecialchars($_POST['checkout']);
    $checkout_time = htmlspecialchars($_POST['checkout_time']);
    $hours = htmlspecialchars($_POST['hours']);
    $totalPrice = htmlspecialchars($_POST['totalPrice']);
    $paymentMethod = htmlspecialchars($_POST['paymentMethod']);
    $gcashReference = isset($_POST['gcashReference']) ? htmlspecialchars($_POST['gcashReference']) : 'N/A';
    
    echo "<script>alert('Reservation successful!');</script>";
} else {
    header("Location: Home.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            padding: 20px;
        }
        .receipt-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
        }
        .bold {
            font-weight: bold;
        }
        .back-button {
            display: block;
            margin-top: 20px;
            padding: 10px;
            background-color: #008cba;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #005f73;
        }
        .print-button {
            display: block;
            margin-top: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }
        .print-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <h2>Reservation Receipt</h2>
        <p><span class="bold">Name:</span> <?php echo $name; ?></p>
        <p><span class="bold">Room Type:</span> <?php echo $room; ?></p>
        <p><span class="bold">Check-in Date:</span> <?php echo $checkin; ?></p>
        <p><span class="bold">Check-in Time:</span> <?php echo $checkin_time; ?></p>
        <p><span class="bold">Check-out Date:</span> <?php echo $checkout; ?></p>
        <p><span class="bold">Check-out Time:</span> <?php echo $checkout_time; ?></p>
        <p><span class="bold">Duration:</span> <?php echo $hours; ?></p>
        <p><span class="bold">Total Price:</span> <?php echo $totalPrice; ?></p>
        <p><span class="bold">Payment Method:</span> <?php echo ucfirst($paymentMethod); ?></p>
        <?php if ($paymentMethod == 'gcash'): ?>
            <p><span class="bold">GCash Reference Number:</span> <?php echo $gcashReference; ?></p>
        <?php endif; ?>
        <button class="print-button" onclick="window.print()">Print Receipt</button>
        <a href="Home.php" class="back-button">Back to Home</a>
    </div>
</body>
</html>
