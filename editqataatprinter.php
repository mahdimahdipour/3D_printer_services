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

$id = $_POST['id'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($image);

// بررسی مقدار دریافت شده
if (!isset($id) || empty($description) || empty($image)) {
    die("همه مقادیر باید وارد شوند");
}

// چاپ مقادیر دریافت شده برای خطایابی
echo "ID: $id<br>";
echo "Description: $description<br>";
echo "Image: $image<br>";

if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
    $sql = "UPDATE images_page3 SET filename='$image', description='$description' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "ویرایش با موفقیت انجام شد";
    } else {
        echo "خطا: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "خطا در آپلود فایل";
}

$conn->close();
?>
