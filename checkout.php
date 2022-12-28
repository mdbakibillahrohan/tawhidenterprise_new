<?php

include "db.php";
include "header.php";

if (!isset($_SESSION["uid"])) {
	header("location:index.php");
}

?>

<style>
	.row-checkout {
		display: -ms-flexbox;
		/* IE10 */
		display: flex;
		-ms-flex-wrap: wrap;
		/* IE10 */
		flex-wrap: wrap;
		margin: 0 -16px;
	}

	.col-25 {
		-ms-flex: 25%;
		/* IE10 */
		flex: 25%;
	}

	.col-50 {
		-ms-flex: 50%;
		/* IE10 */
		flex: 50%;
	}

	.col-75 {
		-ms-flex: 75%;
		/* IE10 */
		flex: 75%;
	}

	.col-25,
	.col-50,
	.col-75 {
		padding: 0 16px;
	}

	.container-checkout {
		background-color: #f2f2f2;
		padding: 5px 20px 15px 20px;
		border: 1px solid lightgrey;
		border-radius: 3px;
	}

	input[type=text] {
		width: 100%;
		margin-bottom: 20px;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 3px;
	}

	label {
		margin-bottom: 10px;
		display: block;
	}

	.icon-container {
		margin-bottom: 20px;
		padding: 7px 0;
		font-size: 24px;
	}

	.checkout-btn {
		background-color: #4CAF50;
		color: white;
		padding: 12px;
		margin: 10px 0;
		border: none;
		width: 100%;
		border-radius: 3px;
		cursor: pointer;
		font-size: 17px;
	}

	.checkout-btn:hover {
		background-color: #45a049;
	}



	hr {
		border: 1px solid lightgrey;
	}

	span.price {
		float: right;
		color: grey;
	}

	/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
	@media (max-width: 800px) {
		.row-checkout {
			flex-direction: column-reverse;
		}

		.col-25 {
			margin-bottom: 20px;
		}
	}
</style>

<section class="section">
	<div class="container-fluid">
		<div class="row-checkout">
			<?php
			if (isset($_SESSION["uid"])) {
				$sql = "SELECT * FROM user_info WHERE user_id='$_SESSION[uid]'";
				$query = mysqli_query($con, $sql);
				$row = mysqli_fetch_array($query);

				echo '
			<div class="col-75">
				<div class="container-checkout">
				<form id="checkout_form" action="checkout_process.php" method="POST" class="was-validated">

					<div class="row-checkout">
					
					<div class="col-50">
						<h3>Billing Address</h3>
						<label for="fname"><i class="fa fa-user" ></i> Full Name</label>
						<input type="text" id="fname" class="form-control" name="firstname" pattern="^[a-zA-Z ]+$"  value="' . $row["first_name"] . ' ' . $row["last_name"] . '" readonly>
						<label for="email"><i class="fa fa-envelope"></i> Email</label>
						<input type="text" id="email" name="email" class="form-control" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$" value="' . $row["email"] . '" required readonly>
						<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
						<input type="text" id="adr" name="address" class="form-control" value="' . $row["address1"] . '" required>
						<label for="city"><i class="fa fa-institution"></i> City</label>
						<input type="text" id="city" name="city" class="form-control" value="' . $row["address2"] . '" pattern="^[a-zA-Z ]+$" required>

						<div class="row">
						<div class="col-50">
							<label for="state">State</label>
							<input type="text" id="state" name="state" value="Dhaka" class="form-control" pattern="^[a-zA-Z ]+$" required>
						</div>
						<div class="col-50">
							<label for="zip">Zip</label>
							<input type="text" id="zip" name="zip" value="1209" class="form-control" required>
						</div>
						</div>
					</div>
					
					
					<div class="col-50">
							<h3>Online Payment System</h3>

						<label for="cname">Name on Card</label>
						<input type="text" id="cname" name="cardname" value="Jhon Jack" class="form-control" pattern="^[a-zA-Z ]+$" readonly>
						
						<div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" value="9999999999999999" readonly>
                    </div>
						<label for="expdate">Exp Date</label>
						<input type="text" id="expdate" name="expdate" class="form-control" pattern="^((0[1-9])|(1[0-2]))\/(\d{2})$" placeholder="12/22" value="12/22" readonly>
						

						<div class="row">
						
						<div class="col-50">
							<div class="form-group CVV">
								<label for="cvv">CVV</label>
								<input type="text" class="form-control" name="cvv" id="cvv" value="213" readonly>
						</div>
						<span style="color: red;">Online Payment System not integrated at this moment, move forward to continue checkout with another payment method. thanks</span>
						</div>
							<img src="img/blarrow.png" width ="100" alt="icon missing">
					</div>
					  
					</div>
					</div>
					<label><input type="CHECKBOX" name="q" class="roomselect" value="conform" required> Shipping address same as billing
					</label>';


				echo '	
				<button class="btn btn-danger">Checkout</button>
				</form>
				</div>
			</div>

			';
			} else {
				echo "<script>window.location.href = 'cart.php'</script>";
			}
			?>

			<div class="col-25">
				<div class="container-checkout">


					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Quantity</th>
								<th scope="col">Amount</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$total = 0;
							$user_id = $_SESSION['uid'];
							$getCartDataQuery = "SELECT product_title, qty, product_price FROM cart INNER JOIN products ON cart.p_id = products.product_id WHERE cart.user_id = '$user_id'";
							$getCartData = mysqli_query($con, $getCartDataQuery);
							$sl = 1;
							while ($data = mysqli_fetch_assoc($getCartData)) {
							?>
								<tr>
									<th scope="row"><?php echo $sl ?></th>
									<td><?php echo $data['product_title'] ?></td>
									<td><?php echo $data['qty'] ?></td>
									<td><?php echo $data['product_price'] * $data['qty'] ?></td>
								</tr>
							<?php
								$total = $total + ($data['product_price'] * $data['qty']);
								$sl++;
							}
							?>

						</tbody>
					</table>


					<hr>

					<h3>Total<span class='price' style='color:green'><b>BDT <?php echo $total ?></b></span></h3>";


				</div>
			</div>
		</div>
	</div>
</section>
<div id="newsletter" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="newsletter">
					<p>Sign Up for the <strong>NEWSLETTER</strong></p>
					<form>
						<input class="input" type="email" placeholder="Enter Your Email">
						<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
					</form>
					<ul class="newsletter-follow">
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>

<?php
include "footer.php";
?>

<script>
	$(document).on('click', 'input[type="checkbox"]', function() {
		$('input[type="checkbox"]').not(this).prop('checked', false);
	});


	function toggleText() {
		var x = document.getElementById("Myid");
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}
</script>

<style>
	#Myid {
		display: block;
	}
</style>