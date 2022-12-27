

<!DOCTYPE html>
<html>
<head>
	<title>Saffron Documents Management System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar bg-info menu-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Document Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">My File
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="text-warning"><a  href="#" >Link One</a></li>
          <li><a href="#">Link Two</a></li>
          <li><a href="#">Link Three</a></li>
        </ul>
      </li>
      <li><a href="#">Shared File</a></li>
      <li><a href="#">Repository</a></li>
      <li><a href="#">New</a></li>
      <li><a href="#">Need Help</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>  
 <ul class="nav navbar-nav navbar-right">
      <li><a data-toggle="modal" data-target="#profileModal" href="#"><span class="glyphicon glyphicon-user"></span>My Profile</a></li>
      <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      <li><?php if (isset($_COOKIE['CurrentUser'])) {
        $username=$_COOKIE['CurrentUser'];
       
        echo "<a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> $username | Logout</a>";
      }else{

        echo "<a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a>"; 
      }


      ?></li>
    </ul>
    </div>
</nav>

<?php 
if (!isset($_COOKIE["CurrentUser"])) {
  
  header("location: login.php");
}
?>