<?php
require 'header.php';
?>

<?php
if (!isset($_SESSION["uid"])) {
  header("location:login_form.php");
  // $uid = $_SESSION["uid"];
  // echo "user id is $uid";
}

// session_start();
include "db.php";
include "PHPMailer/mail_functions.php";

if (isset($_SESSION["uid"])) {

  $user_id = $_SESSION['uid'];
  $address = $_POST['address'];
  $email = $_POST["email"];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $cardname = $_POST['cardname'];
  $cardnumber = $_POST['cardNumber'];
  $expdate = $_POST['expdate'];
  $cvv = $_POST['cvv'];
  $user_id = $_SESSION["uid"];
  $cardnumberstr = (string)$cardnumber;
  $date = date("d. m. y");
  $time = date("h:i:sa");
  $invoic_no = (rand(876, 999));

  // here started the order creation section 
  $session_id = $_SESSION["session_id"];

  // here started the invoice id generation code
  $ordersGetQuery = "SELECT invoice_id FROM orders ORDER BY order_id DESC LIMIT 1";
  $gettingOrder = mysqli_fetch_assoc(mysqli_query($con, $ordersGetQuery));
  if ($gettingOrder["invoice_id"] == null || $gettingOrder["invoice_id"] == 0) {
    $invoice_id = 101;
  } else {
    $invoice_id = $gettingOrder['invoice_id'] + 1;
  }
  echo "invoice id is $invoice_id";
  // here ended the invoice id generation code 

  $orderCreateQuery = "INSERT INTO `orders` ( `user_id`, `trx_id`, `invoice_id`, `session_id`, `p_status`) VALUES ('$user_id', NULL, '$invoice_id', '$session_id', 'pending')";
  $orderCreate = mysqli_query($con, $orderCreateQuery);
  if ($orderCreate) {
    echo "Order inserted";
    $order_id = mysqli_insert_id($con);
    echo "Order id is $order_id";
  }
  // here ended the order creation section 


  $orderInfoInsertQuery = "INSERT INTO `orders_info` 
    (`user_id`,`order_id`,`city`, `state`, `zip`, `cardname`,`cardnumber`,`expdate`,`cvv`) 
    VALUES ( '$user_id', '$order_id', '$city', '$state', '$zip','$cardname','$cardnumberstr','$expdate','$cvv')";

  if (mysqli_query($con, $orderInfoInsertQuery)) {
    $getDataFromCartQuery = "SELECT p_id, qty, product_price FROM cart INNER JOIN products ON cart.p_id=products.product_id WHERE cart.user_id='$user_id'";
    $getDataFromCart = mysqli_query($con, $getDataFromCartQuery);
    $totalOrderAmount = 0;
    while ($data = mysqli_fetch_assoc($getDataFromCart)) {
      $product_id = $data['p_id'];
      $quantity = $data['qty'];
      $amount = $data['product_price'] * $quantity;
      $orderProductInsertQuery = "INSERT INTO `order_products` ( `order_id`, `product_id`, `qty`, `amt`) VALUES ('$order_id', '$product_id', '$quantity', '$amount');";
      if (mysqli_query($con, $orderProductInsertQuery)) {
        $totalOrderAmount = $totalOrderAmount + $amount;
      } else {
        echo mysqli_error($con);
      }
      echo mysqli_error($con);
    }
    $deleteCartQuery = "DELETE FROM cart WHERE user_id = '$user_id'";
    $orderAmountUpdateQuery = "UPDATE orders SET total_order_amount = '$totalOrderAmount' WHERE order_id = '$order_id'";

?>
    <!-- here ended php code and started some html static code  -->

    <!-- here is some html code  -->
    <div class='container'>
      <table class='table table-striped'>
        <thead>
          <tr>
            <th scope='col'>#</th>
            <th scope='col'>Product</th>
            <th scope='col'>Price</th>
            <th scope='col'>Quantity</th>
            <th scope='col'>Amount</th>
          </tr>
        </thead>
        <tbody>
          <!-- html code ended here -->


          <!-- again here started the php code  -->
      <?php
      if (mysqli_query($con, $deleteCartQuery) && mysqli_query($con, $orderAmountUpdateQuery)) {
        $selectOrderProductQueriesForShow = "SELECT * FROM orders INNER JOIN order_products ON orders.order_id=order_products.order_id INNER JOIN products ON order_products.product_id=products.product_id WHERE orders.user_id = '$user_id' AND orders.session_id = '$session_id'";
        $orderProducts = mysqli_query($con, $selectOrderProductQueriesForShow);
        $sl = 1;
        $mailProductListBody = "";
        while ($data = mysqli_fetch_assoc($orderProducts)) {
          $productTitle = $data['product_title'];
          $productPrice = $data['product_price'];
          $productQuantity = $data['qty'];
          $productAmount = $data['qty'] * $data['product_price'];
          // displaying the ordered products data 
          echo "<tr><th scope='row'>$sl</th><td>$productTitle</td><td>$productPrice</td><td>$productQuantity</td><td>$productAmount</td></tr>";
          $mailProductListBody = $mailProductListBody . "<tr><th scope='row'>$sl</th><td>$productTitle</td><td>$productPrice</td><td>$productQuantity</td><td>$productAmount</td></tr>";
          $sl++;
        }
        echo "</tbody>
            </table></div>";


        sendMail("csehelal@outlook.com", $mailProductListBody, "New order from Tawhid", true);
        sendMail($email, $mailProductListBody, "New order from Tawhid", true);


        // this code is regenerating the session id 
        unset($_SESSION["session_id"]);
        include "session_id_generate.php";
        $session_id = $_SESSION["session_id"];
        echo "Regenerated session id is $session_id";
        // regenrating session id code ended 

      }
    } else {
      print_r(mysqli_error($con));
    }
  }



  require  'footer.php';

      ?>