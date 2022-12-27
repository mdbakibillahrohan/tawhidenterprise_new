<?php
require_once('db.php');

$UserInputName = $_REQUEST["username"];
$UserInputPwd = $_REQUEST["password"];
$EncryptedPwd = md5(sha1($UserInputPwd));
$UserAuthKey = md5(sha1($UserInputName.$UserInputPwd));

$MatchQuery = "SELECT * FROM adminusers WHERE UserAuthKey = '$UserAuthKey' AND password = '$EncryptedPwd' ";

  $runQuery = mysqli_query($conn, $MatchQuery);
  $CheckCount = mysqli_num_rows($runQuery);


  if ($runQuery== true) { 
  if ($CheckCount===1) {   

	setcookie("CurrentUser", "$UserInputName", time()+(86700*7 ));
	setcookie("CurrentPwd", "$UserInputPwd", time()+(86700*7 ));
	header("location: index.php");
	
}else{

	header("location: login.php?wrong_info");
// 	echo $UserAuthKey ."<br>";
// 	echo $EncryptedPwd;
}}

if(!empty($_POST["remember"])) {	
	
	setcookie ("remembecookie", "$UserInputName",time()+ 3600);
   
} else {
	
	setcookie("remembecookie","");
  
}


?>