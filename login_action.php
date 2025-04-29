<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$link = mysqli_connect("localhost", "root", "", "myadmin");
$result = mysqli_query($link, "SELECT * FROM `noora 3d` WHERE `username` = '$username' AND `password` = '$password'");
mysqli_close($link);
$row = mysqli_fetch_assoc($result);
if ($row) {
    $_SESSION["login"] = true;
    $_SESSION["role"] = $row["role"];
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
} else {
    echo "<p>نام کاربری یا رمز عبور صحیح نیست</p>";
}
?>
