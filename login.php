<?php
include("pageheader.php");
?>

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
include("pagefooter.html");
?>
