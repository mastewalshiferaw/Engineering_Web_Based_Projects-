<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Registration Form</h2>
        
        <!-- The action="register.php" tells the browser to send data here -->
        <form id="regForm" action="register.php" method="POST" onsubmit="return validateForm()">
            <div class="row">
                <div class="field">
                    <label>First Name</label>
                    <input type="text" name="first_name" id="fname">
                </div>
                <div class="field">
                    <label>Last Name</label>
                    <input type="text" name="last_name" id="lname">
                </div>
                <div class="field">
                    <label>Department</label>
                    <select name="department">
                        <option value="Computer Science">Computer Science</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="ECE">ECE</option>
                        <option value="Electrical Power">Electrical Power</option>
                    </select>
                </div>
            </div>

            <div class="row-bottom">
                <div class="field">
                    <label>Gender</label>
                    <label><input type="radio" name="gender" value="Male" checked> Male</label>
                    <label><input type="radio" name="gender" value="Female"> Female</label>
                </div>

                <div class="field">
                    <label>Hobbies</label>
                    <label><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
                    <label><input type="checkbox" name="hobbies[]" value="Sports"> Sports</label>
                    <label><input type="checkbox" name="hobbies[]" value="Music"> Music</label>
                    <label><input type="checkbox" name="hobbies[]" value="Travel"> Travel</label>
                </div>

                <div class="field">
                    <label>Others</label>
                    <textarea name="others"></textarea>
                </div>
            </div>

            <div class="buttons">
                <button type="submit" class="btn-reg">Register</button>
                <button type="reset" class="btn-clear">Clear</button>
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            let fname = document.getElementById("fname").value;
            let lname = document.getElementById("lname").value;
            if (fname.trim() == "" || lname.trim() == "") {
                alert("First and Last Name must be filled out!");
                return false; // Stops the form from submitting
            }
            return true;
        }
    </script>
</body>
</html>