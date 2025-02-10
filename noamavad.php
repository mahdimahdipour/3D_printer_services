<?php
include("pageheader.php")
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noora 3D</title>
    <!-- لینک بوت استرپ -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-container {
            position: relative;
            overflow: hidden;
            margin-bottom: 1.5rem; /* فاصله بین تصاویر */
        }
        .image-container img {
            width: 250px;
            height: 200px;
            object-fit: cover;
            border-radius: 15px; /* گرد کردن لبه‌ها */
            transition: transform 0.3s ease;
        }
        .image-container:hover img {
            transform: scale(1.1);
        }
    </style>
</head>

<body dir="rtl">
    <section class="container my-4">
        <div class="row text-center">
            <div class="col-12 col-md-4 mb-3">
                <a href="#" class="image-container">
                    <img src="2/1.jpg" alt="">
                </a>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <a href="#" class="image-container">
                    <img src="2/2.jpg" alt="">
                </a>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <a href="#" class="image-container">
                    <img src="2/5.jpg" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="container my-4">
        <div class="row text-center">
            <div class="col-12 col-md-4 mb-3">
                <a href="#" class="image-container">
                    <img src="2/72.jpg" alt="">
                </a>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <a href="#" class="image-container">
                    <img src="2/71.jpg" alt="">
                </a>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <a href="#" class="image-container">
                    <img src="2/6.webp" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="container my-4">
        <div class="row text-center">
            <div class="col-12 col-md-4 mb-3">
                <a href="#" class="image-container">
                    <img src="2/2.jpg" alt="">
                </a>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <a href="#" class="image-container">
                    <img src="2/3.jpg" alt="">
                </a>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <a href="#" class="image-container">
                    <img src="2/6.webp" alt="">
                </a>
            </div>
        </div>
    </section>

<?php
include("pagefooter.html")
?>

<!-- لینک جاوااسکریپت بوت استرپ -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
