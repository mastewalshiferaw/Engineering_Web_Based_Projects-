# Registration Form Project

A simple web registration form built with HTML, CSS, JavaScript, and PHP, using MySQL for data storage.

## Features
- **Frontend:** Responsive form with CSS styling.
- **Validation:** JavaScript to ensure First and Last names are provided before submission.
- **Backend:** PHP script to handle form data and sanitize inputs.
- **Database:** MySQL integration to store user information.

## Prerequisites
- XAMPP (Apache and MySQL).
- A web browser.

## Setup Instructions
1. **Database:** 
   - Open XAMPP Control Panel and start Apache and MySQL.
   - Go to `http://localhost/phpmyadmin/`.
   - Create a database named `test_db`.
   - Import the `users` table using the following SQL:
     ```sql
     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         first_name VARCHAR(50),
         last_name VARCHAR(50),
         department VARCHAR(50),
         gender VARCHAR(10),
         hobbies VARCHAR(255),
         others TEXT,
         reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```
2. **Configuration:** 
   - Ensure the database name in `register.php` matches the one in phpMyAdmin.
3. **Run:** 
   - Place all files in `C:/xampp/htdocs/registration_folder/`.
   - Access the project at `http://localhost/registration_folder/index.php`.

## Technologies Used
- HTML5 / CSS3
- JavaScript
- PHP
- MySQL