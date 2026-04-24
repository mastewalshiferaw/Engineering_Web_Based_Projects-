<?php
session_start();
require_once 'db.php';
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, first_name, last_name, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($pass, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['full_name'] = $row['first_name'] . " " . $row['last_name'];
            header("Location: dashboard.php");
            exit();
        } else { $error = "Invalid Password!"; }
    } else { $error = "User not found!"; }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card login-card">
        <h2>Login Form</h2>
        <?php if($error) echo "<p style='color:red; text-align:center;'>$error</p>"; ?>
        <form method="POST">
            <div class="field">
                <label><b>Username:</b></label>
                <input type="text" name="username" required>
            </div>
            <div class="field">
                <label><b>Password:</b></label>
                <input type="password" name="password" required>
            </div>
            <div class="btn-group center">
                <button type="submit" class="btn-blue">Login</button>
                <button type="reset" class="btn-red">Clear</button>
            </div>
            <div class="center" style="margin-top: 20px;">
                <a href="register.php" style="text-decoration:none; color:#007bff;">Create New Account</a>
            </div>
        </form>
    </div>
</body>
</html>