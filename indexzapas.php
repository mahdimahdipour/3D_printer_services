<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("header.php");
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اسلایدشو</title>
    <style>
        .slideshow-container {
            position: relative;
            max-width: 800px;
            margin: auto;
        }

        .slides {
            display: none;
            text-align: center;
        }

        .slides img {
            width: 97%;
            border-radius: 25px;
            height:30%;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            font-size: 18px;
            transition: 0.3s;
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }

        .dots-container {
            text-align: center;
            margin-top: 15px;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }
    </style>
</head>
<body>
    <div class="container text-right">
        <div class="slides">
            <a href="tarahe.php">
            <img src="uploads/Arse3dbank.jpg" alt="تصویر 1">
            </a>
        </div>
        <div class="slides">
            <a href="skhadamat.php">
            <img src="uploads/BanerArse3d2-1.jpg" alt="تصویر 2">
            </a>
        </div>
        <div class="slides">
            <a href="noamavad.php">
            <img src="uploads/BanerArse3d.jpg" alt="تصویر 3">
            </a>
            
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <div class="dots-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
        let slideIndex = 0;

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("slides");
            let dots = document.getElementsByClassName("dot");

            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        function autoSlide() {
            slideIndex++;
            showSlides(slideIndex);
            setTimeout(autoSlide, 3000); // تغییر خودکار هر ۳ ثانیه
        }

        // شروع اسلایدشو به صورت خودکار
        autoSlide();
    </script>
</body>
</html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<section class="container my-4 daily-report">
    <div class="row justify-content-center">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myadminm";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM images_page1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $imageCount = 0;
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center align-items-center mb-3">';
                echo '<div class="image-container text-center">';

                $links = ["tarahe.php", "skhadamat.php", "noamavad.php"];
                $imageLink = ($imageCount < count($links)) ? $links[$imageCount] : "destination.php?id=" . $row["id"];

                echo '<a href="' . $imageLink . '">';
                echo '<img src="uploads/' . $row["filename"] . '" alt="تصویر">';
                echo '</a>';
                echo '<p>' . $row["description"] . '</p>';

                if (isset($_SESSION["role"]) && $_SESSION["role"] == 'admin') {
                    echo '<button class="edit-button" onclick="toggleActionButtons(this)"><i class="fas fa-edit"></i></button>';
                    echo '<div class="action-buttons">';
                    echo '<form action="edit.php" method="post" enctype="multipart/form-data" class="mb-2">';
                    echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                    echo '<input type="text" name="description" placeholder="توضیح جدید" class="form-control mb-2" required>';
                    echo '<input type="file" name="image" class="form-control mb-2" required>';
                    echo '<button type="submit" class="btn btn-primary w-100 mb-2">ویرایش</button>';
                    echo '</form>';
                    echo '<form action="delete.php" method="post">';
                    echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                    echo '<button type="submit" class="btn btn-danger w-100 mb-2">حذف</button>';
                    echo '</form>';
                    echo '</div>';
                }
                echo '</div>';
                echo '</div>';

                $imageCount++;
            }
        } else {
            echo "هیچ تصویری پیدا نشد.";
        }

        $conn->close();
        ?>
    </div>
</section>





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
 این سایت شامل بخش های طراحی و پرینت، قطعات پرینتر، نوع مواد می باشد
</p>
<p class="bala"> شماره ی تلفن: 09134661477</p>

    <!-- محتوای اصلی سایت -->
</main>




<!-- لینک جاوااسکریپت بوت استرپ -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- لینک جاوااسکریپت آیکون‌های بوت استرپ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<?php include("pagefooter.html"); ?>

<!-- لینک جاوااسکریپت برای عملکرد دکمه مداد -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<script>
    function toggleActionButtons(button) {
        var actionButtons = button.nextElementSibling;
        if (actionButtons.style.display === "none" || actionButtons.style.display === "") {
            actionButtons.style.display = "block";
        } else {
            actionButtons.style.display = "none";
        }
    }
</script>

</body>
</html>
