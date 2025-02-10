<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noora 3D</title>
    <link rel="stylesheet" href="index.css">
    <!-- لینک بوت استرپ -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- لینک آیکون‌های بوت استرپ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body dir="rtl">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto text-right">
            
            <li class="nav-item">
                <a>
                    <img src="2/photo_۲۰۲۵-۰۱-۰۴_۲۱-۰۰-۵۳.png" id="logo">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">صفحه ی اصلی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="khadamat.php">خدمات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tamas.php">تماس با ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about1.php">درباره ی ما</a>
                
            </li>
    
            
        </ul>
        
        <!-- پنل جستجو -->
        <form class="form-inline my-2 my-lg-0 mx-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="جستجو" aria-label="جستجو">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">جستجو</button>
        </form>
        
        <ul class="navbar-nav mr-auto text-left">
            <li class="nav-item">
                <a class="nav-link" href="register.php" id="register">ثبت نام</a>
            </li>
            <?php if(isset($_SESSION["login"])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" id="logout">خروج</a>
                </li>
            <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php" id="login">ورود</a>
                </li>
            <?php } ?>
            <!-- آیکون سبد خرید -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<header class="text-center my-4">
</header>

<main class="container text-right">
    <!-- محتوای اصلی سایت -->
</main>

<!-- لینک جاوااسکریپت بوت استرپ -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- لینک جاوااسکریپت آیکون‌های بوت استرپ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
