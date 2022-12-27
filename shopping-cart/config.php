<?php
	$conn = new mysqli("localhost","tawhid_cart","Exuk6tVqvy","tawhid_cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>