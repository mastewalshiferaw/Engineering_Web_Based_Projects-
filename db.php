<?php
$servername = "127.0.0.1:3307"; // This tells PHP to use the new port
$username = "root";
$password = "";
$dbname = "login_system_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . " (Make sure XAMPP MySQL is GREEN on port 3307)");
}
?>