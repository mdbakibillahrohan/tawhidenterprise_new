<?php
session_start();
include("../db.php");
include "sidenav.php";
include "topheader.php";
if (isset($_GET["order_id"])) {
    $order_id = $_GET["order_id"];
} else {
    $order_id = 0;
}
$isShowToaster = false;
if (isset($_POST["trx_id"])) {
    $trx_id = $_POST["trx_id"];
    $orderTrxIdUpdateQuery = "UPDATE orders SET trx_id = '$trx_id', p_status = 'completed' WHERE order_id = '$order_id'";
    if (mysqli_query($con, $orderTrxIdUpdateQuery)) {
        $isShowToaster = true;
    } else {
        echo "Something went wrong";
    }
}
?>
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <!-- your content here -->
        <div class="col-md-14">
            <div class="card ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Orders Details </h4>
                </div>
                <div class="card-body">
                    <?php
                    $getOrderDetailsQuery = "SELECT * FROM orders INNER JOIN user_info ON orders.user_id = user_info.user_id INNER JOIN order_products ON orders.order_id = order_products.order_id INNER JOIN orders_info ON orders_info.order_id = orders.order_id INNER JOIN products ON products.product_id = order_products.product_id WHERE orders.order_id = $order_id";
                    $getOrderDetails = mysqli_query($con, $getOrderDetailsQuery);
                    $data = mysqli_fetch_assoc($getOrderDetails);
                    ?>
                    <h2 class="text-center">Order Details</h2>
                    <div class="text-center">
                        <div>
                            <span>Customer Name: </span> <?php echo $data["first_name"] . " " . $data["last_name"] ?>
                        </div>
                        <div>
                            <span>Invoice Id: </span> <?php echo $data["invoice_id"] ?>
                        </div>
                        <div>
                            <span>Order Id: </span> <?php echo $data["order_id"] ?>
                        </div>
                        <div>
                            <span>Payment Status: </span> <?php echo $data["p_status"] ?>
                        </div>
                        <div>
                            <span>Total Order Amount: </span> <?php echo $data["total_order_amount"] ?>
                        </div>
                        <div>
                            <span>Contact Number: </span> <?php echo $data["mobile"] ?>
                        </div>
                        <div>
                            <span>Address 1: </span> <?php echo $data["address1"] ?>
                        </div>
                        <div>
                            <span>Address 2: </span> <?php echo $data["address2"] ?>
                        </div>
                        <?php if ($data["p_status"] == "pending") { ?>
                            <form class="d-flex justify-content-center align-items-center flex-column border-danger" method="post">
                                <input name="trx_id" class="form-control" placeholder="Enter TRX ID" type="text">
                                <button class="btn btn-success">Make Payment</button>
                            </form>
                        <?php } else { ?>
                            <div>
                                <span>Transaction ID: </span> <?php echo $data["trx_id"] ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="container my-5">
                        <h2 class="text-center">Products</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>



                                <?php
                                $sl = 1;
                                $totalAmount = 0;
                                foreach ($getOrderDetails as $products) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $sl; ?></th>
                                        <td><?php echo $products["product_title"]; ?></td>
                                        <td><?php echo $products["product_price"]; ?></td>
                                        <td><?php echo $products["qty"]; ?></td>
                                        <td><?php echo $products["qty"] * $products["product_price"]; ?></td>
                                    </tr>

                                <?php
                                    $totalAmount = $totalAmount + ($products["qty"] * $products["product_price"]);
                                    $sl++;
                                }
                                ?>

                                <tr>
                                    <th scope="row">Total</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><strong><?php echo $totalAmount; ?> </strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?php
include "footer.php";

if ($isShowToaster) {
?>
    <script>
        const toastLiveExample = document.getElementById('liveToast');
        const toast = new bootstrap.Toast(toastLiveExample);
        toast.show();
    </script>
<?php
}
?>