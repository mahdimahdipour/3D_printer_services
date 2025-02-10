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
            overflow: hidden;
            margin-bottom: 0;
            
        }

        .image-container img {
            width: 250px;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .col-12.col-md-4.mb-3 p {
            margin-top: 0.5rem;
            text-align: center;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body dir="rtl">
    <section class="container my-4">
        <div class="row text-center">
            <div class="col-12 col-md-4 mb-3">
                <div class="image-container">
                    <a href="tarahe.php">
                        <img src="2/2.png" alt="طراحی و پرینت">
                    </a>
                </div>
                <p>طراحی و پرینت</p>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-container">
                    <a href="qataatprinter.php">
                        <img src="2/3.webp" alt="قطعات پرینتر">
                    </a>
                </div>
                <p>قطعات پرینتر</p>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-container">
                    <a href="noamavad.php">
                        <img src="2/4.jpg" alt="نوع مواد">
                    </a>
                </div>
                <p>نوع مواد</p>
            </div>
        </div>
    </section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php
include("pagefooter.html")
?>

<!-- لینک جاوااسکریپت بوت استرپ -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
