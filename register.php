<?php
require_once 'db.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure hashing
    $dept = $_POST['department'];
    $gender = $_POST['gender'];
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";
    $others = $_POST['others'];

    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, username, password, department, gender, hobbies, others) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $fname, $lname, $username, $password, $dept, $gender, $hobbies, $others);

    if ($stmt->execute()) {
        $message = "<p style='color:green; text-align:center;'>Registration Successful! <a href='login.php'>Login here</a></p>";
    } else {
        $message = "<p style='color:red; text-align:center;'>Error: Username might already exist.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card registration-card">
        <h2>Registration Form</h2>
        <?php echo $message; ?>
        <form method="POST">
            <div class="grid-3">
                <div class="field"><label>First Name</label><input type="text" name="first_name" required></div>
                <div class="field"><label>Last Name</label><input type="text" name="last_name" required></div>
                <div class="field">
                    <label>Department</label>
                    <select name="department">
                        <option>Computer Science</option>
                        <option>Software Engineering</option>
                        <option>ECE</option>
                    </select>
                </div>
            </div>

            <!-- Added for functional login -->
            <div class="grid-2">
                <div class="field"><label>Username (for login)</label><input type="text" name="username" required></div>
                <div class="field"><label>Password</label><input type="password" name="password" required></div>
            </div>

            <div class="grid-3">
                <div class="field">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="Male" checked> Male<br>
                    <input type="radio" name="gender" value="Female"> Female<br>
                    <input type="radio" name="gender" value="Other"> Other
                </div>
                <div class="field">
                    <label>Hobbies</label><br>
                    <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
                    <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>
                    <input type="checkbox" name="hobbies[]" value="Music"> Music<br>
                    <input type="checkbox" name="hobbies[]" value="Travel"> Travel
                </div>
                <div class="field">
                    <label>Others</label>
                    <textarea name="others" rows="4"></textarea>
                </div>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn-blue">Register</button>
                <button type="reset" class="btn-red">Clear</button>
            </div>
            <p style="text-align:center; margin-top:15px;"><a href="login.php">Back to Login</a></p>
        </form>
    </div>
</body>
</html>