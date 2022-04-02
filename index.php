<?php
include_once("config.php");
include_once("header.php");
?>
<div class="container mt-3">
  <?php
  //Getting verification status
  $verified = @$_GET['verified'];
  if(isset($verified)){//echo "This account is verified";?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong>Your account if verified.
      </div>
  <?php }else{ ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error!</strong>Please verify your account before login.
      </div>
  <?php } ?>
  <h2>Login Form</h2>
  <form action="login_sub.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="user_email" placeholder="Enter email" name="user_email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="user_pwd" placeholder="Enter password" name="user_pwd">
    </div>
    <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="submit">
  </form><span>Already Have Account Login</span> <a href="register.php">Here</a>
</div>
<?php include_once("footer.php"); ?>

