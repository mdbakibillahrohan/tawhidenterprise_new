<!doctype html>
<html lang="en">

<head>
  <title>Givenchy Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="assets/css/Material+Icons.css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="assets/css/black-dashboard.css" rel="stylesheet" />
  
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          PuneethReddy
        </a>
      </div>
      <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="3a8db1f4-24d8-4dbf-85c9-4f5215c1b29a">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">              
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="adduser.php">             
              <p>Add User</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productlist.php">             
              <p>Product List</p>
            </a>
            
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="orders.php">              
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="addproduct.php">              
              <p>Add Products</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="manageuser.php">            
              <p>Manage User</p>
            </a>
          </li>
           <li class="nav-item " ><?php if (isset($_COOKIE['CurrentUser'])) {
          $username=$_COOKIE['CurrentUser'];

          echo "<a class='nav-link' href='logout.php'><span class='glyphicon glyphicon-log-in'></span><p> $username | Logout</p></a>";
        }else{

          echo "<a class='nav-link' href='login.php'><span class='glyphicon glyphicon-log-in'></span><p> Login</p></a>"; 
        }


      ?></li>
         
        </ul>
      </div>
    </div>
    
    