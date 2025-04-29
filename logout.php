<?php
session_start();
unset($_SESSION["login"]); // حذف وضعیت ورود
header("Location: index.php"); // بازگشت به صفحه اصلی
exit();
?>

<script>
    location.replace("index.php");
</script>
<?php
include("pagefooter.html");
?>
