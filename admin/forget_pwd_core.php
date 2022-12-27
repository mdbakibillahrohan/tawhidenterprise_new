<?php
require_once('db.php');

 	$username = $_REQUEST["username"];
 	// $mobile = $_REQUEST["mobile"];
	$pwd = $_REQUEST["npassword"];	
	$EncryptedPwd = md5(sha1($pwd));
	$UserAuthKey = md5(sha1($username.$pwd));

		if($_POST['npassword'] != $_POST['cpassword'])
{
    header("location: forget_pwd.php?pass_not_match");
}else{

	$UpdateQuery = "UPDATE  adminusers  SET UserAuthKey = '$UserAuthKey', password ='$EncryptedPwd' WHERE username = '$username'"; 

	$runQuery = mysqli_query($conn,	 $UpdateQuery);

	if($runQuery == true){
		header("location: login.php?resetpwd");
	}else{
		header("location: login.php?wrong_info");
	}}

?>