<?php

include("pageheader.php");

$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];


$link = mysqli_connect("localhost","root","","user");
$result = mysqli_query($link,"INSERT INTO `noora 3d` (`username`, `password`, `name`) VALUES ('$username', '$password', '$name');");
mysqli_close($link);

if($result==true){
    ?>
        <p>ثبت نام انجام شد</p>
    <?php
}else{
?>
<p>ثبت نام انجام نشد</p>
<?php
}
?>
<?php

include("pagefooter.html")
?>

