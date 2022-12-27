<?php

if(isset($_POST['remember'])){


header("location: login.php?rememberme");	
}

if(!isset($_POST['remember'])){


setcookie("CurrentUser", "", time()-(86700*50));
setcookie("CurrentPwd", "", time()-(86700*50));
header("location: login.php");	
}





?>