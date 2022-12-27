
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:void(0)">Tawhid Enterprise Shop Admin Panel</a>

      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
       <ul class="nav navbar-nav navbar-right">
        <li><a style="color: tomato;" href="../index.php"><span class="glyphicon glyphicon-user"></span>VISIT AS CUSTOMER</a></li>
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
</div>
</nav>


