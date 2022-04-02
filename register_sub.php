<?php 
include_once("config.php"); 
if(isset($_POST['register'])){
	$fullname = $_POST['fullname'];
	$user_email = $_POST['user_email'];
	$user_pwd = md5($_POST['user_pwd']);
	
	$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $captcha_string_length = 50;
    $captcha_code = '';
    $max = strlen($characters) - 1;
    for ($i = 0;$i < $captcha_string_length;$i++)
    {
        $captcha_code .= $characters[mt_rand(0, $max) ];
    }

    $verificationcode = $captcha_code;
	$isRead = 0;

	$check_exist_email = "SELECT user_email FROM `register` WHERE user_email= '".$user_email."' ";
	$res = mysqli_query($conn,$check_exist_email);
	//$resdata = mysqli_fetch_assoc($res); 
	if(mysqli_num_rows($res)>0){
			echo "Email Already Registered";

	}else{
		 $insert_user = "INSERT INTO register(`fullname`,`user_email`,`user_pwd`,`verificationcode`,`isRead`) VALUES('".$fullname."','".$user_email."','".$user_pwd."','".$verificationcode."','".$isRead."')";
		//die();

		$result = mysqli_query($conn,$insert_user);
		if($insert_user){
			//echo "Inserted successfully";
			?>
			
			<?php
			$to = $user_email;
			$msg = "You Have successfully Registered";
			$subject = "Email Verfication";
			$headers = "MIME-Version:1.0"."\r\n";
			$headers = "Cpntent-type:text/html;charset=iso-8859-1"."\r\n";
			$headers = "From:Email Verified|Vaibhav Gangrade"."\r\n";
			$message.="<html><body><div>Dear $fullname,</div><br><div>Please click link for  email verification <a href='http://localhost/email-verification-php?verificationcode=".$verificationcode."'>Verifiy</a></div></body></html>";
			//sending mail to user
			mail($to,$subject,$message,$headers);
			echo "<script>alert('Registered successfully Please check your email addres and verify')</script>";
			echo "<script>window.location.href='index.php';</script>";


		}else{
			echo "Failed to insert";
		} 
	}

}


?>
