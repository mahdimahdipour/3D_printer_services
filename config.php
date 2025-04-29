<?php
$servername = "localhost";
$username = "myadmin";  // نام کاربری دیتابیس شما
$password = "admin";  // رمز عبور دیتابیس شما
$dbname = "myadmin";  // نام دیتابیس شما

// ایجاد اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
