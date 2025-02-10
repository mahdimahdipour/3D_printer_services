<?php
include("pageheader.php");
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="register_action.php" method="post" class="text-center">
        <div class="form-group">
          <label for="name"></label>
          <input type="text" name="name" id="name" placeholder="نام" class="form-control mx-auto" style="max-width: 300px;">
        </div>
        <div class="form-group">
          <label for="username"></label>
          <input type="text" name="username" id="username" placeholder="نام کاربری" class="form-control mx-auto" style="max-width: 300px;">
        </div>
        <div class="form-group">
          <label for="password"></label>
          <input type="password" name="password" id="password" placeholder="کلمه عبور" class="form-control mx-auto" style="max-width: 300px;">
        </div>
        <button type="submit" class="btn btn-primary btn-block" style="max-width: 300px; margin: 0 auto;">ثبت نام</button>
      </form>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
include("pagefooter.html");
?>
