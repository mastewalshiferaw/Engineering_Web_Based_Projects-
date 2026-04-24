<?php
$servername = "127.0.0.1:3307"; 
$username = "root";
$password = "";     

// Create connection without a database selected first
$conn = new mysqli($servername, $username, $password);

// Check if connection worked
if ($conn->connect_error) {
    die("<div style='color:red; font-family:sans-serif; padding:20px; border:1px solid red;'>
            <h2>Database Connection Failed!</h2>
            <p>Error message: <b>" . $conn->connect_error . "</b></p>
            <hr>
            <p><b>How to fix this:</b></p>
            <ul>
                <li>Ensure XAMPP Control Panel has <b>MySQL started</b> (Green).</li>
                <li>If it says 'Access Denied', you likely have a password. Try changing <code>\$password = '';</code> to <code>\$password = 'root';</code> in your code.</li>
            </ul>
         </div>");
}

// 1. Create database
$conn->query("CREATE DATABASE IF NOT EXISTS login_system_db");
$conn->select_db("login_system_db");

// 2. Create users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    department VARCHAR(50),
    gender VARCHAR(20),
    hobbies VARCHAR(255),
    others TEXT
)";

if ($conn->query($sql) === TRUE) {
    echo "<h2 style='color:green;'>Success! Database and Table are ready.</h2>";
    echo "<a href='register.php' style='font-size:1.2em;'>Click here to go to Register Page</a>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>