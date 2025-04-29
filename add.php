<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myadmin";

// ایجاد اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$description = $_POST['description'];
$page = $_POST['page'];
$image = preg_replace("/[^a-zA-Z0-9.]/", "", $_FILES['image']['name']); // تمیز کردن نام فایل
$target_dir = "uploads/";
$target_file = $target_dir . basename($image);

$table_name = '';

switch ($page) {
    case 'page1':
        $table_name = 'images_page1';
        break;
    case 'page2':
        $table_name = 'images_page2';
        break;
    case 'page3':
        $table_name = 'images_page3';
        break;
    case 'page4':
        $table_name = 'images_page4';
        break;
}

// آپلود فایل
if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
    $sql = "INSERT INTO $table_name (filename, description) VALUES ('$image', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "تصویر جدید اضافه شد";
    } else {
        echo "خطا: " . $sql . "<br>" . $conn->error;
        error_log("Database error: " . $conn->error);
    }
} else {
    echo "خطا در آپلود فایل";
    error_log("File upload error: " . $_FILES['image']['error']);
}

$conn->close();
?>
