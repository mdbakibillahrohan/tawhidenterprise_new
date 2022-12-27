<?php
session_start();
include("../db.php");

error_reporting(0);
if (isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'update_order') {
  $order_id = $_GET['order_id'];

  /*this is delet query*/
  mysqli_query($con, "update orders set p_status = 'Completed' where order_id='$order_id'") or die("delete query is incorrect...");
}

///pagination
$page = $_GET['page'];

if ($page == "" || $page == "1") {
  $page1 = 0;
} else {
  $page1 = ($page * 10) - 10;
}

include "sidenav.php";
include "topheader.php";
?>
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <!-- your content here -->
    <div class="col-md-14">
      <div class="card ">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Orders / Page <?php echo $page; ?> </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive ps">
            <table class="table table-hover tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>Order Id</th>
                  <th>Customer</th>
                  <th>Contact </th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Payment Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $ordersSelectQuery = "SELECT * FROM orders INNER JOIN user_info ON orders.user_id = user_info.user_id ORDER BY order_id DESC";
                $ordersSelectQueryRun = mysqli_query($con, $ordersSelectQuery);
                while ($data = mysqli_fetch_assoc($ordersSelectQueryRun)) {
                  $order_id = $data["order_id"];
                  $name = $data["first_name"] . " " . $data["last_name"];
                  $contact = $data["mobile"];
                  $email = $data["email"];
                  $Address = $data["address1"];
                  $status = $data["p_status"];
                ?><tr>
                    <td><?php echo $order_id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $contact; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $Address; ?></td>
                    <td><?php echo $status; ?></td>
                    <td><a class="btn btn-primary" href="#">View</a></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>

            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php
include "footer.php";
?>