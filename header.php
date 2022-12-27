<?php
session_start();
include "session_id_generate.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Tawhid Enterprise Limited</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<style>
		#navigation {
			background: skyblue;


		}

		#header {

			background: skyblue;


		}

		#top-header {


			background: rgba(1, 1, 1, 0.7);


		}

		#footer {
			background: rgba(255, 255, 255, 0.7);


			color: #1E1F29;
		}

		#bottom-footer {
			background: #7474BF;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #348AC7, #7474BF);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #348AC7, #7474BF);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


		}

		.footer-links li a {
			color: #1E1F29;
		}

		.mainn-raised {

			margin: -7px 0px 0px;
			border-radius: 6px;
			box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

		}

		.glyphicon {
			display: inline-block;
			font: normal normal normal 14px/1 FontAwesome;
			font-size: inherit;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}

		.glyphicon-chevron-left:before {
			content: "\f053"
		}

		.glyphicon-chevron-right:before {
			content: "\f054"
		}
	</style>
	<script>
		$(document).ready(function() {
			$('.search-box input[type="text"]').on("keyup input", function() {
				/* Get input value on change */
				var inputVal = $(this).val();
				var resultDropdown = $(this).siblings(".result");
				if (inputVal.length) {
					$.get("backend-search.php", {
						term: inputVal
					}).done(function(data) {
						// Display the returned data in browser
						resultDropdown.html(data);
					});
				} else {
					resultDropdown.empty();
				}
			});

			// Set search input value on click of result item
			$(document).on("click", ".result p", function() {
				$(this).parents(".search-box").find('input[type="text"]').val($(this).text());
				$(this).parent(".result").empty();
			});
		});
	</script>

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">

				<ul class="header-links pull-right">
					<li><a href="#">৳ BDT</a></li>
					<li><?php
						include "db.php";
						if (isset($_SESSION["uid"])) {
							$sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
							$query = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($query);

							echo '
								<div class="dropdownn">
								<a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI ' . $row["first_name"] . '</a>
								<div class="dropdownn-content">
								<a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
								<a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>

								</div>
								</div>';
						} else {
							echo '
								<div class="dropdownn">
								<a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
								<div class="dropdownn-content">
								<a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>User Login</a>
								<a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>User Register</a>
								<a href="admin/index.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Admin Login</a>

								</div>
								</div>';
						}
						?>

					</li>
				</ul>

			</div>
		</div>
		<!-- /TOP HEADER -->



		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="#" class="logo">
								<font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
									<a href="index.php"><img src="img/tawhidlogo.png" width="300" alt=""></a>
								</font>

							</a>
						</div>
					</div>
					<!-- /LOGO -->
					<style>
						/* Formatting search box */
						.search-box {
							width: 300px;
							position: relative;
							display: inline-block;
							font-size: 14px;
						}

						.search-box input[type="text"] {
							height: 32px;
							padding: 5px 10px;
							border: 1px solid #CCCCCC;
							font-size: 14px;
						}

						.result {
							position: absolute;
							z-index: 999;
							top: 100%;
							left: 0;
						}

						.search-box input[type="text"],
						.result {
							width: 100%;
							box-sizing: border-box;
						}

						/* Formatting result items */
						.result p {
							margin: 0;
							padding: 7px 10px;
							border: 1px solid #CCCCCC;
							border-top: none;
							cursor: pointer;
							background: skyblue;
						}

						.result p:hover {
							background: #fff;
						}
					</style>

					<!-- SEARCH BAR -->

					<div class="col-md-6">
						<div class="header-search">
							<form action="store1.php" method="POST">
								<!-- <select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Men</option>
										<option value="1">Women </option>
										<option value="1">Kids </option>
									</select> -->
								<div class="search-box">
									<input type="text" autocomplete="off" placeholder="Search by products name..." />
									<div class="result"></div>
								</div>
								<!-- <button type="submit" id="search_btn" class="search-btn">Search</button> -->
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">


							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<div class="badge qty">0</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list" id="cart_product">


									</div>

									<div class="cart-btns">
										<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i> edit cart</a>

									</div>
								</div>

							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->
	<nav id='navigation'>
		<!-- container -->
		<div class="container" id="get_category_home">

		</div>
		<!-- responsive-nav -->

		<!-- /container -->
	</nav>


	<!-- NAVIGATION -->

	<div class="modal fade" id="Modal_login" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>
				<div class="modal-body">
					<?php
					include "login_form.php";

					?>

				</div>

			</div>

		</div>
	</div>
	<div class="modal fade" id="Modal_register" role="dialog">
		<div class="modal-dialog" style="">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>
				<div class="modal-body">
					<?php
					include "register_form.php";

					?>

				</div>

			</div>

		</div>
	</div>