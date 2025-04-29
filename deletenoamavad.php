<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myadminm";

// ایجاد اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

// بررسی مقدار دریافت شده
if (!isset($id)) {
    die("ID برای حذف ارسال نشده است");
}

$sql = "SELECT filename FROM images_page4 WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $filename = $row['filename'];

    echo "Filename: $filename<br>";

    // بررسی وجود فایل قبل از حذف
    if (is_file("uploads/$filename") && file_exists("uploads/$filename")) {
        if (unlink("uploads/$filename")) {
            $sql = "DELETE FROM images_page4 WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo "حذف با موفقیت انجام شد";
            } else {
                echo "خطا: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "خطا در حذف فایل";
        }
    } else {
        echo "فایل مورد نظر وجود ندارد";
    }
} else {
    echo "هیچ رکوردی با این ID یافت نشد";
}

$conn->close();
?>
