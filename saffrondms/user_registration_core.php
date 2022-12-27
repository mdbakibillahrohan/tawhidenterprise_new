<?php
require_once('db.php');
// if(isset($_REQUEST["pname"]) && isset($_REQUEST["pname2"]) && isset($_REQUEST["fname"]) && isset($_REQUEST["fname2"]) && isset($_REQUEST["mname"]) && isset($_REQUEST["mname2"]) && isset($_REQUEST["username"]) && isset($_REQUEST["password"])){

	$pname = $_REQUEST["pname"];
	$pname2 = $_REQUEST["pname2"];
	$fname = $_REQUEST["fname"];
	$fname2 = $_REQUEST["fname2"];
	$mname = $_REQUEST["mname"];
	$mname2 = $_REQUEST["mname2"];
	$dob = $_REQUEST["dob"];
	$nid = $_REQUEST["nid"];
	$birth = $_REQUEST["birth"];
	$passport = $_REQUEST["passport"];
	$gender = $_REQUEST["gender"];
	$religion = $_REQUEST["religion"];
	$bloodgroup = $_REQUEST["bloodgroup"];
	$marital = $_REQUEST["marital"];
	$email = $_REQUEST["email"];
	$mobile = $_REQUEST["mobile"];
	$othermobile = $_REQUEST["othermobile"];
	$username = $_REQUEST["username"];
	$pwd = $_REQUEST["pwd"];
	$EncryptedPwd = md5(sha1($pwd));
	$UserAuthKey = md5(sha1($email.$pwd));

	$insertQuery = "INSERT INTO  userregistration (fullname_eng, fullname_bng, fathersname_eng, fathersname_bng, mothersname_eng, mothersname_bng, date_of_birth, nid_number, birth_certificate_no, passport_no, gender, religion, blood_group, marital_status, useremail, user_mobile, user_other_number, username, UserAuthKey, password, userpic_title, userpic_directory) VALUES ('$pname','$pname2','$fname','$fname2','$mname','$mname2','$dob','$nid','$birth','$passport','$gender','$religion','$bloodgroup','$marital','$email','$mobile','$othermobile','$username', '$UserAuthKey', '$EncryptedPwd','helal.png','/img/user')";



	$runQuery = mysqli_query($conn, $insertQuery);

	if($runQuery == true){	

		setcookie("CurrentUser", "", time()-(86700*50));
		header("location: login.php");


	}else{
		header("location: index.php?action=false");
	}
// }


?>