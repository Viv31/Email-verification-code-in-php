<?php
include_once("config.php");
include_once("header.php");
?>
<div class="container mt-3">
  <h2>Registration Form</h2>
  <form action="register_sub.php" method="POST">
  	<div class="mb-3 mt-3">
      <label for="fullname">Full Name:</label>
      <input type="text" class="form-control" id="fullname" placeholder="Enter Full name" name="fullname">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="user_email" placeholder="Enter email" name="user_email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="user_pwd" placeholder="Enter password" name="user_pwd">
    </div>
    <div class="mb-3">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="user_cpwd" placeholder="Enter password again" name="user_cpwd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <input type="submit" class="btn btn-primary" value="Submit" name="register" id="submit">
  </form>
  
</div>
<?php include_once("footer.php"); ?>
