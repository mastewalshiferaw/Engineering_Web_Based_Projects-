<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card" style="text-align: center;">
        <h1>Welcome, <?php echo $_SESSION['full_name']; ?>!</h1>
        <p>You have successfully logged in to your dashboard.</p>
        
    </div>
</body>
</html>