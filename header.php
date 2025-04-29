<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noora 3D - صفحه اصلی</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <i class="fas fa-cube"></i>
                <span>Noora 3D</span>
            </div>
            <button class="menu-toggle">☰</button> <!-- دکمه همبرگری -->
            <nav class="nav-links-container">
                <ul class="nav-links">
                    <li><a href="index.php">صفحه اصلی</a></li>
                    <li><a href="skhadamat.php">خدمات</a></li>
                    <li><a href="#bala">درباره ما</a></li>
                    <?php 
                    if (isset($_SESSION["login"])) { 
                        echo '<li><a href="logout.php" class="btn-special">خروج</a></li>';
                    } else {
                        echo '<li><a href="register.php" class="btn-special">ثبت‌نام</a></li>';
                        echo '<li><a href="login.php" class="btn-special">ورود</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <script src="script.js"></script> <!-- فایل جاوا اسکریپت -->
</body>
</html>


<style>
/* استایل هدر */
/* استایل عمومی هدر */
header {
    background: linear-gradient(90deg, rgb(0, 102, 255), rgb(255, 255, 255), rgb(35, 104, 207));
    background-size: 300% 300%;
    animation: headerAnimation 8s infinite ease-in-out;
    color: white;
    padding: 10px 0;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

/* انیمیشن طیف رنگی */
@keyframes headerAnimation {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* ساختار اصلی هدر */
.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* لوگو */
.logo {
    display: flex;
    align-items: center;
    font-size: 1.8rem;
    font-weight: bold;
    gap: 10px;
    color: white;
}

.logo i {
    font-size: 2rem;
    color: #ffeb3b;
}

/* لینک‌ها */
.nav-links-container {
    display: flex; /* پیش‌فرض برای دسکتاپ */
    justify-content: flex-end; /* تراز به سمت راست */
    flex-direction: row;
}

.nav-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 15px;
}

.nav-links li a {
    text-decoration: none;
    color:rgb(7, 7, 7);
    font-size: 1rem;
    padding: 5px 10px;
    border-radius: 5px;
    transition: all 0.3s ease;
    font-family: b Koodak;
    font-size:20px;
}

.nav-links li a:hover {
    background-color: rgb(247, 185, 0);
    color: #4e95ff;
}

/* دکمه سه‌خط */
.menu-toggle {
    display: none; /* مخفی پیش‌فرض */
    background: none;
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
}

/* واکنش‌گرایی برای موبایل */
@media (max-width: 768px) {
    .menu-toggle {
        display: block; /* نمایش دکمه در موبایل */
    }

    .nav-links-container {
        display: none; /* مخفی شدن لینک‌ها پیش‌فرض در موبایل */
        position: absolute;
        top: 100%; /* قرار گرفتن منو پایین‌تر از هدر */
        right: 0; /* تنظیم به سمت راست */
        background: rgba(78, 149, 255, 0.9); /* پس‌زمینه نیمه‌شفاف */
        padding: 10px 20px;
        border-radius: 10px;
    }

    .nav-links-container.show {
        display: flex; /* نمایش منو هنگام کلیک */
    }

    .nav-links {
        flex-direction: column; /* لینک‌ها عمودی شوند */
        align-items: flex-end; /* تراز لینک‌ها به سمت راست */
        gap: 10px;
    }

    .nav-links li a {
        text-align: right; /* متن در سمت راست */
        padding: 10px;
    }
}






</style>
