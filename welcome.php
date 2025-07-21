<?php
// Start the session
session_start();
$conn = new mysqli('localhost', 'root', '', 'user_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Retrieve the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #007bff, #00d4ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .welcome-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            text-decoration: none;
            background: #fff;
            color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
            transition: background 0.3s, transform 0.3s;
        }

        a:hover {
            background: #f4f4f4;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>Thank you for joining us. We're excited to have you here!</p>
        <a href="logout.php">Log Out</a>
    </div>
</body>
</html>
