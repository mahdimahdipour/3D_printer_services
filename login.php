<?php
session_start(); // شروع جلسه
$_SESSION["login"] = true; // تنظیم سشن برای ورود کاربر

include("header.php"); // نمایش هدر صفحه
?>

    <style>
        body {
            text-align: right;
        }
    </style>
</head>


<main class="container text-right">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="login_action.php" method="post" class="text-center">
                    <div class="form-group">
                        <label for="username"></label>
                        <input type="text" name="username" id="username" placeholder="نام کاربری" class="form-control d-block mx-auto">
                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" name="password" id="password" placeholder="کلمه عبور" class="form-control d-block mx-auto">
                    </div>
                    <button type="submit" class="btn btn-success">ورود</button>
                </form>
            </div>
        </div>
    </div>
</main>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<?php
include("pagefooter.html");
?>
</body>
</html>
