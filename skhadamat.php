<?php
session_start();

// اطلاعات اتصال به دیتابیس
$servername = "localhost";
$username = "root"; // نام کاربری دیتابیس
$password = "";     // رمز عبور دیتابیس
$dbname = "myadmin"; // نام دیتابیس

// اتصال به دیتابیس
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال به دیتابیس ناموفق بود: " . $conn->connect_error);
}

// بررسی ارسال فرم
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['phone_number'])) {
    $phone_number = $_POST['phone_number'];
    $country_code = $_POST['country_code'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    if (!empty($phone_number) && !empty($first_name) && !empty($last_name)) {
        $full_phone_number = $country_code . $phone_number;

        // ذخیره اطلاعات در جدول
        $sql = "INSERT INTO users (phone_number, first_name, last_name) VALUES ('$full_phone_number', '$first_name', '$last_name')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['phone_number'] = $full_phone_number;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;

            // انتقال به فرم اصلی
            header("Location: khadamat.php");
            exit();
        } else {
            $error = "خطا در ذخیره‌سازی داده‌ها: " . $conn->error;
        }
    } else {
        $error = "لطفاً تمام فیلدها را پر کنید.";
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ورود</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px 40px;
            width: 100%;
            max-width: 400px;
            text-align: right;
        }

        .form-container h1 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #444444;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #666666;
        }

        input[type="text"],
        input[type="tel"],
        select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            background-color: #4caf50;
            color: #ffffff;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>ورود اطلاعات</h1>
        <form method="post" action="" onsubmit="return validatePhoneNumber()">
            <label for="country_code">کد کشور:</label>
            <select id="country_code" name="country_code" required>
                <option value="+98" data-length="11">🇮🇷 ایران (+98)</option>
                <option value="+1" data-length="10">🇺🇸 ایالات متحده (+1)</option>
                <option value="+44" data-length="10">🇬🇧 انگلستان (+44)</option>
                <option value="+49" data-length="10">🇩🇪 آلمان (+49)</option>
                <option value="+91" data-length="10">🇮🇳 هند (+91)</option>
            </select>

            <label for="phone_number">شماره تلفن:</label>
            <input type="tel" id="phone_number" name="phone_number" required placeholder="مثال: 912345678" />

            <label for="first_name">نام:</label>
            <input type="text" id="first_name" name="first_name" required />

            <label for="last_name">نام خانوادگی:</label>
            <input type="text" id="last_name" name="last_name" required />

            <button type="submit">ادامه</button>

            <p id="phoneError" class="error" style="display: none;">شماره تلفن وارد شده صحیح نیست!</p>
        </form>
    </div>

    <script>
        function validatePhoneNumber() {
            const countryCodeElement = document.getElementById("country_code");
            const phoneNumberElement = document.getElementById("phone_number");
            const errorElement = document.getElementById("phoneError");

            const selectedOption = countryCodeElement.options[countryCodeElement.selectedIndex];
            const maxLength = parseInt(selectedOption.getAttribute("data-length"));

            if (phoneNumberElement.value.length !== maxLength) {
                errorElement.style.display = "block";
                return false;
            } else {
                errorElement.style.display = "none";
                return true;
            }
        }
    </script>
</body>
</html>
