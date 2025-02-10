<?php

include("pageheader.php");

$username = $_POST["username"];
$password = $_POST["password"];


$link = mysqli_connect("localhost","root","","user");
$result = mysqli_query($link,"SELECT * FROM `noora 3d` WHERE `username` = '$username' and `password`='$password';");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row){
    $_SESSION["login"]=true;
    ?>
        <script>
            location.replace("index.php");
        </script>
        <?php
}else{
?>
<p>نام کاربری یا رمز عبور صحیح نیست</p>
<?php
}
?>
<?php

include("pagefooter.html")
?>

