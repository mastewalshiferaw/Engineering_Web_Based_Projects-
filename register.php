<?php
$servername = "127.0.0.1"; // Using the IP ensures we don't hit a local alias
$username = "root";
$password = "";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // Attempt one last time to connect to the server without the DB name first
    $conn_alt = new mysqli($servername, $username, $password);
    $dbs = $conn_alt->query("SHOW DATABASES");
    $db_exists = false;
    while($row = $dbs->fetch_assoc()) {
        if(trim($row['Database']) === 'registration_db') {
            $db_exists = true;
        }
    }
    
    if($db_exists) {
        die("Connection failed: The database exists, but PHP cannot select it. Error: " . $conn->connect_error);
    } else {
        die("Connection failed: Database 'registration_db' was not found on the server.");
    }
}

echo "Connection Successful!";
?>