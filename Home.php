<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Burgundy Inn</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            
        }
        body {
            background: rgb(250, 244, 244);
            overflow-x: hidden;
    
        }
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
        .hero {
            text-align: center;
            margin-top: 50px;
            font-size: 30px;
            font-weight: 600;
            color: #431515;
        }
        .rooms {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 50px;
        }
        .room {
            text-align: center;
            font-size: 20px;
            font-weight: 400;
            transition: transform 0.3s ease-in-out;
        }
        .room img {
            width: 310px;
            height: 268px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            transition: transform 0.3s ease-in-out;
        }
        .room img:hover {
            transform: scale(1.05);
        }
        .footer {
            width: 100%;
            background: #333;
            color: white;
            text-align: center;
            padding: 30px 0;
            margin-top: 40px;
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
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
    <div class="hero">Your home away from home, where comfort meets relaxation.</div>
    <div class="rooms">
        <div class="room">
        <a href="reservation.php">
            <img src="1.png" alt="Single Bed">
        </a>
            <p>Single Bed</p>
        </div>
        <div class="room">
        <a href="reservation.php">
            <img src="2.png"  alt="Double Bed">
    </a>
            <p>Double Bed</p>
        </div>
        <div class="room">
        <a href="reservation.php">
            <img src="3.png" alt="Standard">
    </a>
            <p>Standard</p>
        </div>
    </div>
    <div class="rooms">
        <div class="room">
        <a href="reservation.php">
            <img src="4.png" alt="Family Room">
    </a>
            <p>Family Room</p>
        </div>
        <div class="room">
        <a href="reservation.php">
            <img src="5.png" alt="Deluxe">
    </a>
            <p>Deluxe</p>
        </div>
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
</html>
