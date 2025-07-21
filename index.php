<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'user_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email already exists, show popup message
        echo "<script>
                alert('This email is already registered. Please use a different email or log in.');
                window.location.href = 'index.php'; // Redirect back to registration page
              </script>";
    } else {
        // Proceed with registration
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $username, $email, $password);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Registration successful! Please log in.');
                    window.location.href = 'login.php'; // Redirect to login page
                  </script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>




<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="POST" action="">
        <h2>Registration Form</h2>
        Username: <input type="text" name="username" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Register</button>
        <div style="text-align: center; margin-bottom: 20px;">
    <a href="login.php" style="text-decoration: none; margin-right: 20px; color: #007bff;">Login</a>
    <a href="index.php" style="text-decoration: none; color: #007bff;">Register</a>
</div>

    </form>
</body>
</html>
