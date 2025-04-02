<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking | Burgundy Inn</title>
    <script src="https://kit.fontawesome.com/YOUR-KIT-ID.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background:rgb(51, 109, 130);
            overflow-x: hidden;
        }

        /* Header */
        .header {
            width: 100%;
            height: 100px;
            background: white;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 50px;
        }
        .logo img {
            width: 150px;
            height: auto;
            
        }
        
        .nav {
            display: flex;
            gap: 50px;
        }
        .nav a {
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            color: black;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            transition: color 0.3s ease-in-out;
        }
        .nav a:hover {
            color: #8C9A94;
        }

        /* Main Content */
        .container {
            display: flex;
            justify-content: space-between;
            padding: 40px;
            gap: 30px;
            flex-wrap: wrap;
        }

        /* Left Side: Room Listings */
        .rooms-container {
            width: 65%;
        }
        h1 {
            margin-bottom: 20px;
        }
        .rooms {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
        .room {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        .room:hover {
            transform: scale(1.05);
        }
        .room img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .room h2 {
            margin-bottom: 10px;
            color: #0077cc;
        }
        .room p {
            font-size: 14px;
            color: #666;
        }
        .room button {
            background-color: #008cba;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
            margin-top: 10px;
            transition: background-color 0.3s ease-in-out;
        }
        .room button:hover {
            background-color: #005f73;
        }

        /* Right Side: Google Map */
        .map-container {
            width: 30%;
            height: 450px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Footer */
        .footer {
            width: 100%;
            background: #333;
            color: white;
            text-align: center;
            padding: 30px 0;
            margin-top: 40px;
            height
        }
        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
            font-size: 24px;
            color: white;
            transition: color 0.3s ease-in-out;
        }
        .social-icons a:hover {
            color: #0077cc;
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
            }
            .rooms-container, .map-container {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo">
        <img src="logo.png" alt="Burgundy Inn Logo">
    </div>
    <div class="nav">
        <a href="Home.php">Home</a>
        <a href="reservation.php">Reservation</a>
        <a href="about_us.php">About us</a>
        <a href="contact.php">Contact us</a>
        <a href="login.php">Logout</a>
    </div>
</div>

<!-- Main Content -->
<div class="container">
    
<div class="rooms">
    <div class="room">
        <img src="1.png" alt="Single Bed">
        <h2>Single Bed</h2>
        <p>Room for 1 Adult</p>
        <p><i class="fas fa-wifi"></i> Free WiFi | <i class="fas fa-smoking-ban"></i> No Smoking</p>
      <form action="reservationform.php" method="GET">
    <input type="hidden" name="room" value="Single Bed">
    <label for="single-hours">Select hours:</label>
    <select id="single-hours" name="hours">
            <select id="single-hours" class="hour-select" name="hours" data-price="250">
            <option value="2">2 Hours - PHP 500</option>
            <option value="3">3 Hours - PHP 750</option>
            <option value="4">4 Hours - PHP 1000</option>
            <option value="5">5 Hours - PHP 1250</option>
            </select>
            <button type="submit" name="reserve">Reserve</button>
        </form>
    </div>

    <div class="room">
        <img src="2.png" alt="Double Bed">
        <h2>Double Bed</h2>
        <p>Room for 2 Adults</p>
        <p><i class="fas fa-wifi"></i> Free WiFi | <i class="fas fa-smoking-ban"></i> No Smoking</p>
        <form action="reservationform.php" method="GET">
    <input type="hidden" name="room" value="Double Bed">
    <label for="single-hours">Select hours:</label>
    <select id="single-hours" name="hours">
            <select id="single-hours" class="hour-select" name="hours" data-price="300">
            <option value="2">2 Hours - PHP 600</option>
            <option value="3">3 Hours - PHP 750</option>
            <option value="4">4 Hours - PHP 1000</option>
            <option value="5">5 Hours - PHP 1250</option>
            </select>
            <button type="submit" name="reserve">Reserve</button>
        </form>

    </div>

    <div class="room">
        <img src="3.png" alt="Standard Room">
        <h2>Standard Room</h2>
        <p>Room for 3 Adults</p>
        <p><i class="fas fa-wifi"></i> Free WiFi | <i class="fas fa-smoking-ban"></i> No Smoking</p>
        <label for="standard-hours">Select hours:</label>
        <form action="reservationform.php" method="GET">
    <input type="hidden" name="room" value="Standard Room">
    <label for="single-hours">Select hours:</label>
    <select id="single-hours" name="hours">
        <select id="standard-hours" class="hour-select" data-price="350">
            <option value="4">2 Hours - PHP 700</option>
            <option value="5">3 Hours - PHP 1050</option>
        </select>
        <button>Reserve</button>
    </div>

    <div class="room">
        <img src="4.png" alt="Deluxe Room">
        <h2>Deluxe Room</h2>
        <p>For 2 Adults & 2 Kids</p>
        <p><i class="fas fa-wifi"></i> Free WiFi | <i class="fas fa-smoking-ban"></i> No Smoking</p>
        <form action="reservationform.php" method="GET">
    <input type="hidden" name="room" value="Deluxe Room">
    <label for="single-hours">Select hours:</label>
    <select id="single-hours" name="hours">
        <select id="deluxe-hours" class="hour-select" data-price="450">
            <option value="5">2 Hours - PHP 900</option>
            <option value="6">3 Hours - PHP 1350</option>
        </select>
        <button>Reserve</button>
    </div>

    <div class="room">
        <img src="5.png" alt="Family Room">
        <h2>Family Room</h2>
        <p>For 4 People</p>
        <p><i class="fas fa-wifi"></i> Free WiFi | <i class="fas fa-smoking-ban"></i> No Smoking</p>
        <form action="reservationform.php" method="GET">
    <input type="hidden" name="room" value="Family Room">
    <label for="single-hours">Select hours:</label>
    <select id="single-hours" name="hours">
        <select id="family-hours" class="hour-select" data-price="400">
            <option value="4">2 Hours - PHP 800</option>
            <option value="5">3 Hours - PHP 1000</option>
            <option value="6">4 Hours - PHP 1200</option>
        </select>
        <button>Reserve</button>
        
    </div>
</div>

<script>
    // Update price dynamically based on selected hours
    document.querySelectorAll('.hour-select').forEach(select => {
        select.addEventListener('change', function() {
            let pricePerHour = parseInt(this.dataset.price);
            let selectedHours = parseInt(this.value);
            let totalPrice = pricePerHour * selectedHours;
            this.nextElementSibling.innerHTML = Reserve - PHP ${totalPrice};
        });
    });

    
</script>


    <!-- Right Side: Google Map -->
    <div class="map-container">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.494915095435!2d124.64231607578196!3d8.480166091467105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32fff31c24275099%3A0x84d4f2d4ba84bb61!2sBurgundy%20Inn!5e0!3m2!1sen!2sph!4v1710652312345"
        width="100%" 
        height="400" 
        style="border:0; border-radius:10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<div class="footer">
        <p>Burgundy Inn</p>
        <p>&copy; 2025 OurWebsite.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

</body>
</html> <a href="receipt.php?id=<?php echo $reservation_id; ?>">View Receipt</a>
