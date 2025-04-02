
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Reservation</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #336d82;
            padding: 20px;
        }
        .container {
            width: 90%;
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label, select, input {
            display: block;
            width: 100%;
            margin: 10px 0;
        }
        input[type="text"], input[type="number"], input[type="date"], input[type="time"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[readonly] {
            background-color: #f0f0f0;
            cursor: not-allowed;
        }
        button {
            background-color: #008cba;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }
        button:hover {
            background-color: #005f73;
        }
        .back-button {
            background-color: #ccc;
            color: black;
            margin-top: 10px;
        }
        .back-button:hover {
            background-color: #999;
        }
        .hidden {
            display: none;
        }
        .gcash-container {
            text-align: center;
            margin-top: 10px;
        }
        #gcashQRCode {
            width: 200px;
            height: 200px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Room Reservation</h2>
        <form id="reservationform" action="receipt.php" method="POST" onsubmit="return validatePayment()">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="room">Room Type:</label>
            <input type="text" id="room" name="room" value="<?php echo htmlspecialchars($_GET['room'] ?? ''); ?>" readonly>
            
            <label for="checkin">Check-in Date:</label>
            <input type="date" id="checkin" name="checkin" required>

            <label for="checkin_time">Check-in Time:</label>
            <input type="time" id="checkin_time" name="checkin_time" required>

            <label for="hours">Select Stay Duration:</label>
            <select id="hours" name="hours" required>
                <option value="">-- Select Hours --</option>
                <option value="2">2 Hours</option>
                <option value="3">3 Hours</option>
                <option value="4">4 Hours</option>
                <option value="5">5 Hours</option>
                <option value="6">6 Hours</option>
                <option value="overnight">Overnight Stay</option>
            </select>

            <label for="checkout">Check-out Date:</label>
            <input type="date" id="checkout" name="checkout" readonly>

            <label for="checkout_time">Check-out Time:</label>
            <input type="time" id="checkout_time" name="checkout_time" readonly>

            <label>Total Price:</label>
            <input type="text" id="totalPrice" name="totalPrice" readonly>

            <!-- Payment Method Selection -->
            <label for="paymentMethod">Payment Method:</label>
            <select id="paymentMethod" name="paymentMethod" onchange="toggleGCash()">
                <option value="cash">Cash</option>
                <option value="gcash">GCash</option>
            </select>

            <!-- GCash Payment Details (Initially Hidden) -->
            <div id="gcashDetails" class="gcash-container hidden">
                <p>Scan the QR Code to Pay with GCash:</p>
                <img id="gcashQRCode" src="gcash_qr.png" alt="GCash QR Code">
                <label for="gcashReference">GCash Reference Number:</label>
                <input type="text" id="gcashReference" name="gcashReference" placeholder="Enter Reference Number">
            </div>

            <button type="submit">Reserve</button>
        </form>

        <button type="button" class="back-button" onclick="window.history.back()">Back</button>
        <button type="button" onclick="window.location.href='receipt.php'">View Receipt</button>
    </div>

    <script>
        function updateCheckoutAndPrice() {
            let checkinDate = document.getElementById('checkin').value;
            let checkinTime = document.getElementById('checkin_time').value;
            let duration = document.getElementById('hours').value;
            let roomType = document.getElementById('room').value.trim().toLowerCase();

            if (!checkinDate || !checkinTime || !duration) return;

            let pricePerHour = {
                'single bed': 250,
                'double bed': 300,
                'standard room': 350,
                'deluxe room': 450,
                'family room': 400
            }[roomType] || 0;

            let pricePerNight = {
                'single bed': 1000,
                'double bed': 1500,
                'standard room': 2000,
                'deluxe room': 2500,
                'family room': 3000
            }[roomType] || 0;

            let checkinDateTime = new Date(`${checkinDate}T${checkinTime}`);
            let checkoutDateTime = new Date(checkinDateTime);
            let totalPrice = 0;

            if (duration === "overnight") {
                checkoutDateTime.setDate(checkoutDateTime.getDate() + 1);
                checkoutDateTime.setHours(12, 0);
                totalPrice = pricePerNight;
            } else {
                checkoutDateTime.setHours(checkoutDateTime.getHours() + parseInt(duration));
                totalPrice = pricePerHour * parseInt(duration);
            }

            document.getElementById('checkout').value = checkoutDateTime.toISOString().split('T')[0];
            document.getElementById('checkout_time').value = checkoutDateTime.toTimeString().split(' ')[0].substring(0,5);
            document.getElementById('totalPrice').value = 'PHP ' + totalPrice.toFixed(2);
        }

        function toggleGCash() {
            let paymentMethod = document.getElementById('paymentMethod').value;
            let gcashDetails = document.getElementById('gcashDetails');
            if (paymentMethod === 'gcash') {
                gcashDetails.classList.remove('hidden');
            } else {
                gcashDetails.classList.add('hidden');
            }
        }

        function validatePayment() {
            let paymentMethod = document.getElementById('paymentMethod').value;
            let gcashReference = document.getElementById('gcashReference').value.trim();

            if (paymentMethod === 'gcash' && gcashReference === '') {
                alert('Please enter a valid GCash Reference Number.');
                return false;
            }

            return true;
        }

        document.getElementById('checkin').addEventListener('change', updateCheckoutAndPrice);
        document.getElementById('checkin_time').addEventListener('change', updateCheckoutAndPrice);
        document.getElementById('hours').addEventListener('change', updateCheckoutAndPrice);
        window.onload = updateCheckoutAndPrice;
    </script>

</body>
</html>