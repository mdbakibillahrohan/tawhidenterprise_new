<?php
require_once('db.php');
// if(isset($_REQUEST["userID"])){

 $username = $_COOKIE['CurrentUser'];

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
	$UserAuthKey = md5(sha1($username.$pwd));

		if($_POST['password'] != $_POST['cpassword'])
{
	alert("Passwrod not match");
    header("location: index.php");
}else{

	$UpdateQuery = "UPDATE  userregistration  SET fullname_eng ='$pname', fullname_bng ='$pname2', fathersname_eng ='$fname', fathersname_bng ='$fname2', mothersname_eng ='$mname', mothersname_bng ='$mname2', date_of_birth ='$dob', nid_number ='$nid', birth_certificate_no ='$birth', passport_no ='$passport', gender ='$gender', religion ='$religion', blood_group ='$bloodgroup', marital_status ='$marital', useremail ='$email', user_mobile ='$mobile', user_other_number ='$othermobile', username ='$username', UserAuthKey = '$UserAuthKey', password ='$EncryptedPwd', userpic_title ='helal.png', userpic_directory ='img/users' WHERE username = '$username' "; 



	$runQuery = mysqli_query($conn,	 $UpdateQuery);

	if($runQuery == true){
		header("location: index.php?action=true");
	}else{
		header("location: login.php?action=false");
	}}
// }


?>