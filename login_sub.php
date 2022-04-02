<?php 
include_once("config.php");
if(isset($_POST['submit'])){
	$user_email = $_POST['user_email'];
	$user_pwd = md5($_POST['user_pwd']);
	$userloginQuery = "SELECT * FROM register WHERE `user_email` = '".$user_email."'AND `user_pwd` = '".$user_pwd."'AND `isRead`!=0";
	$res = mysqli_query($conn,$userloginQuery);
	
	if(mysqli_num_rows($res) > 0){
		$row = mysqli_fetch_assoc($res);
		$_SESSION['username'] = $user_email;
		header("location:dashboard.php");
	}else{
		echo "You are not verified user.Please verify first.";
	}
}
?>