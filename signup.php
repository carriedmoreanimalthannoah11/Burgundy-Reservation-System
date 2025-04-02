<?php
include 'connection.php'; // Include DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
        exit();
    }

    // Check if email already exists
    $checkEmail = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $checkEmail->store_result();

    if ($checkEmail->num_rows > 0) {
        echo "<script>alert('Email already registered! Please log in.'); window.location.href='login.php';</script>";
        exit();
    }
    $checkEmail->close();

    // Hash password before storing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (fullname, mobile, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullname, $mobile, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful! Redirecting to login...'); window.location.href='login.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body { background:rgb(255, 255, 255); font-family: Lato, sans-serif; color:rgb(165, 165, 165); text-align: center; }
        .container { width: 400px; margin: 50px auto; padding: 30px; background: #E3E3E3; border-radius: 10px; }
        input { width: 90%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        .signup-btn { background: #405296; color: white; font-size: 18px; padding: 10px; width: 100%; border: none; border-radius: 5px; cursor: pointer; }
        .login-link { margin-top: 20px; display: block; color: #839CF6; text-decoration: none; }
    </style>
</head>
<body>

    <h1>Burgundy Inn</h1>

    <div class="container">
        <h1>Sign Up</h1>
        <form method="POST">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="text" name="mobile" placeholder="Mobile Number" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
            <button type="submit" class="signup-btn">Sign Up</button>
        </form>
        <a href="login.php" class="login-link">Already have an account? Login Here</a>
    </div>

</body>
</html>
