<?php
$conn = new mysqli('localhost', 'root', '', 'user_db');
session_start(); // Start session
session_unset(); // Clear all session variables
session_destroy(); // Destroy session
header("Location: index.php"); // Redirect to registration
exit();
?>
