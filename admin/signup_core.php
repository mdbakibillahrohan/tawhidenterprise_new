<?php
require_once('db.php');
// if(isset($_REQUEST["pname"]) && isset($_REQUEST["pname2"]) && isset($_REQUEST["fname"]) && isset($_REQUEST["fname2"]) && isset($_REQUEST["mname"]) && isset($_REQUEST["mname2"]) && isset($_REQUEST["username"]) && isset($_REQUEST["password"])){



	$username = $_REQUEST["username"];
	$email = $_REQUEST["email"];
	$pwd = $_REQUEST["password"];
	$cpwd = $_REQUEST["cpassword"];	
	$EncryptedPwd = md5(sha1($pwd));
	$UserAuthKey = md5(sha1($username.$pwd));

	if($_POST['password'] != $_POST['cpassword'])
{
    header("location: signup.php?pass_not_match");
}else{
	
	$insertQuery = "INSERT INTO  adminusers (username, useremail, password, UserAuthKey) VALUES ('$username','$email','$EncryptedPwd','$UserAuthKey')";



	$runQuery = mysqli_query($conn, $insertQuery);

	if($runQuery == true){	


		header("location: login.php?success");        

	}else{
		header("location: signup.php?wrong_info");
	}}
// }


?>




