# Integrated Login & Registration System

A complete user management system featuring user registration, secure login authentication, and a personalized dashboard. This project is built using PHP and MySQL, with a focus on security and a clean user interface.

## 🚀 Features
- **Modern UI:** Clean, card-based design for login and registration forms.
- **Secure Authentication:** Uses `password_hash()` (BCRYPT) to securely store user credentials.
- **Session Protection:** The Dashboard is protected; only authenticated users can view it.
- **Auto-Setup:** Includes a `setup.php` script to automatically initialize the database and tables.
- **Port Compatibility:** Pre-configured to work with MySQL on Port 3307 (common XAMPP fix).

## 🛠 Technologies Used
- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP (MySQLi with Prepared Statements)
- **Database:** MySQL (MariaDB)

## 📋 Prerequisites
- **XAMPP** (Apache and MySQL).
- Ensure your MySQL is running. If Port 3306 is blocked, follow the setup for **Port 3307**.

## ⚙️ Setup & Installation

### 1. Folder Structure
Place all project files in the following directory:
`C:/xampp/htdocs/Engineering_Web_Based_Projects-/`

### 2. Database Initialization
This project features an automated setup. You do **not** need to use phpMyAdmin manually.
1. Open XAMPP and start **Apache** and **MySQL**.
2. Open your browser and visit:  
   `http://localhost/Engineering_Web_Based_Projects-/setup.php`
3. The script will create the `login_system_db` database and the `users` table automatically.

### 3. Port Configuration (If Required)
If your MySQL is running on Port 3307, the files `db.php` and `setup.php` are already configured to use:
- **Server:** `127.0.0.1:3307`
- **User:** `root`
- **Password:** `""` (Empty)

## 📂 Project Structure
- `index.php` / `register.php`: The registration form and data processing.
- `login.php`: The login interface and authentication logic.
- `dashboard.php`: The restricted area visible only after logging in.
- `db.php`: Central database connection file.
- `setup.php`: Script to build the database environment.
- `logout.php`: Ends the user session and redirects to login.
- `style.css`: Contains all visual styling for the project.

## 🖥️ Usage
1. **Register:** Go to `register.php` to create a new account.
2. **Login:** Use your new username and password at `login.php`.
3. **Dashboard:** Upon successful login, you will be greeted by name on the `dashboard.php` page.
4. **Logout:** Click the logout button to securely exit your session.

## 🔒 Security Features
- **SQL Injection Prevention:** All database queries use Prepared Statements.
- **Password Security:** Passwords are never stored in plain text; the system uses BCRYPT hashing.
- **Access Control:** `session_start()` is used to prevent unauthorized URL access to the dashboard.
