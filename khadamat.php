<?php
session_start();
include("header.php");

// اطلاعات اتصال به دیتابیس
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "myadmin"; 

// اتصال به دیتابیس
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال به دیتابیس ناموفق بود: " . $conn->connect_error);
}

// بررسی ارسال فرم
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت اطلاعات فرم
    $print_method = $_POST['print-method'];
    $filament = $_POST['filament'];
    $accuracy = $_POST['accuracy'];
    $density = $_POST['density'];
    $surface_finish = implode(", ", $_POST['surface-finish'] ?? []);
    $additional_comments = $_POST['additional-comments'] ?? "بدون توضیحات";

    // هندل کردن آپلود فایل
    $uploaded_file_path = null;
    if (isset($_FILES['uploaded-file']) && $_FILES['uploaded-file']['error'] == 0) {
        $upload_dir = "uploads/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        $file_name = basename($_FILES['uploaded-file']['name']);
        $target_file = $upload_dir . uniqid() . "_" . $file_name;
        if (move_uploaded_file($_FILES['uploaded-file']['tmp_name'], $target_file)) {
            $uploaded_file_path = $target_file;
        } else {
            echo "<p style='color: red; text-align: center;'>خطا در آپلود فایل.</p>";
        }
    }

    // به‌روزرسانی اطلاعات کاربر در جدول
    $phone_number = $_SESSION['phone_number']; // شماره تلفن کاربر از سشن

    $sql = "UPDATE users 
            SET print_method = '$print_method', 
                filament = '$filament',
                accuracy = '$accuracy',
                density = '$density',
                surface_finish = '$surface_finish',
                additional_comments = '$additional_comments'";

    if ($uploaded_file_path) {
        $sql .= ", uploaded_file = '$uploaded_file_path'";
    }

    $sql .= " WHERE phone_number = '$phone_number'";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green; text-align: center;'>سفارش شما با موفقیت ثبت و به‌روزرسانی شد.</p>";
    } else {
        echo "<p style='color: red; text-align: center;'>خطا در ثبت سفارش: " . $conn->error . "</p>";
    }
}

$conn->close();
?>

<main class="container text-right">
    <p class="bala"> خدمات پرینت سه بعدی</p>
    <!-- محتوای اصلی سایت -->
    <form method="post" action="" enctype="multipart/form-data">
        <!-- انتخاب روش پرینت -->
        <div>
            <label for="print-method">روش پرینت:</label>
            <select id="print-method" name="print-method">
                <option value="fdm">FDM</option>
            </select>
        </div>

        <!-- انتخاب نوع فیلامنت -->
        <div>
            <label for="filament">متریال:</label>
            <select id="filament" name="filament">
                <option value="pla">PLA</option>
                <option value="abs">ABS</option>
                <option value="tpu">TPU</option>
                <option value="petg">PETG</option>
            </select>
        </div>

        <!-- دقت چاپ -->
        <div>
            <label for="accuracy">دقت چاپ (میکرون):</label>
            <input type="range" id="accuracy" name="accuracy" min="50" max="300" value="150" step="50" oninput="updateAccuracyValue(this.value)">
            <span id="accuracyValue">150</span>
        </div>

        <!-- تراکم داخلی -->
        <div>
            <label for="density">تراکم داخلی (درصد پرشدگی):</label>
            <input type="range" id="density" name="density" min="0" max="100" value="20" step="5" oninput="updateDensityValue(this.value)">
            <span id="densityValue">20</span>
        </div>

        <!-- انتخاب رنگ -->
        <div>
            <label for="additional-comments"> انتخاب رنگ:</label>
            <textarea id="additional-comments" name="additional-comments"></textarea>
        </div>

        <!-- پرداخت سطح -->
        <div>
            <label>پرداخت سطح:</label>
            <div>
                <input type="checkbox" id="no-finish" name="surface-finish[]" value="بدون پرداخت">
                <label for="no-finish">بدون پرداخت</label>
            </div>
            <div>
                <input type="checkbox" id="polish" name="surface-finish[]" value="پولیش (صرفا برای ABS)">
                <label for="polish">پولیش (صرفا برای ABS)</label>
            </div>
            <div>
                <input type="checkbox" id="painting" name="surface-finish[]" value="رنگ آمیزی حرفه ای">
                <label for="painting">رنگ آمیزی حرفه ای</label>
            </div>
        </div>
<br>
        <!-- آپلود فایل -->
        <!-- آپلود فایل -->
<div style="text-align: center;">
    <label for="uploaded-file">
        <p>آپلود فایل:</p>
        <img src="uploads/جعبه.png" alt="آپلود فایل" style="width: 150px; cursor: pointer;" id="tas">
    </label>
    <input type="file" id="uploaded-file" name="uploaded-file" style="display: none;">
</div>


        <!-- دکمه ثبت سفارش -->
        <button type="submit" id="sabt">ثبت اولیه سفارش</button>
    </form>
</main>

<script>
    function updateAccuracyValue(value) {
        document.getElementById("accuracyValue").textContent = value;
    }

    function updateDensityValue(value) {
        document.getElementById("densityValue").textContent = value;
    }
</script>

<style>
    form div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555555;
        text-align: right;
    }

    #additional-comments {
        border-radius: 25px;
        padding: 0px 100px;
    }

    #upload-files {
        background-color: rgb(222, 131, 97);
    }

    #sabt {
        background-color: rgb(255, 255, 255);
        font-family: 'Koodak';
        box-shadow: 1px 1px 4px rgba(255, 255, 255, 0.95);
        border-radius:20px;
    }
    #tas{
        border-radius:20px;
    }
</style>

<main class="container text-right">
<b>
<p id="bala"> 
آدرس وب سایت :
</b>
<p class="bal">
Noora3D.ir
</p>
<p class="bala">
محتوای سایت:
 این نرم افزار شامل بخش های طراحی و پرینت، قطعات پرینتر، نوع مواد می باشد
</p>
<p class="bala"> شماره ی تلفن: 09134661477</p>
</main>

<?php include("pagefooter.html"); ?>
