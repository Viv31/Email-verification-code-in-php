<?php
include_once("config.php");
//Getting verification code
$verificationcode = $_GET['verificationcode'];
if(isset($verificationcode)){
//echo "verificationcode is".$verificationcode;
	//update status if vaerification code is generated
	$chk_updated_status ="SELECT `verificationcode`,`isRead` FROM register WHERE `verificationcode` = '".$verificationcode."' AND `isRead`!=1";
	$result = mysqli_query($conn,$chk_updated_status);
	if(mysqli_num_rows($result)>0){
		$update_status = "UPDATE register SET `isRead` = 1 WHERE `verificationcode`='".$verificationcode."' ";
		$res = mysqli_query($conn,$update_status);
		if($res){
			//echo "Verified Successfully";
			header("location:index.php?verified=1");

		}else{
			echo "You are already verified";
		}

	}

}else{
	echo "Verification code is not valid ";
}

?>