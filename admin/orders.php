<?php
session_start();
include("../db.php");
///pagination
if (!isset($_GET["page"])) {
  $page = 1;
} else {
  $page = $_GET["page"];
}
$resultPerpage = 10;
$pageFirstResult = ($page - 1) * $resultPerpage;

$ordersDataForPaginationQuery = "SELECT * FROM orders";
$ordersDataForPaginationResult = mysqli_query($con, $ordersDataForPaginationQuery);
$numberOfResultData = mysqli_num_rows($ordersDataForPaginationResult);
$numberOfPage = ceil($numberOfResultData / $resultPerpage);

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
                  <th>Invoice Id</th>
                  <th>Payment Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $ordersSelectQuery = "SELECT * FROM orders INNER JOIN user_info ON orders.user_id = user_info.user_id ORDER BY order_id DESC LIMIT $pageFirstResult, $resultPerpage";
                $ordersSelectQueryRun = mysqli_query($con, $ordersSelectQuery);
                while ($data = mysqli_fetch_assoc($ordersSelectQueryRun)) {
                  $order_id = $data["order_id"];
                  $name = $data["first_name"] . " " . $data["last_name"];
                  $contact = $data["mobile"];
                  $email = $data["email"];
                  $invoice_id = $data["invoice_id"];
                  $status = $data["p_status"];
                ?><tr>
                    <td><?php echo $order_id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $contact; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $invoice_id; ?></td>
                    <td><?php echo $status; ?></td>
                    <td><a class="btn btn-primary" href="order_details.php?order_id=<?php echo $order_id ?>">View</a></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
            <nav aria-label="Page navigation" class="me-0">
              <ul class="pagination">
                <li class="page-item"><a style="pointer-events: <?php echo $page == 1 ? "none" : "" ?>;" class="page-link" href="orders.php?page=<?php echo $page - 1 ?>">Previous</a></li>
                <?php
                for ($i = 1; $i <= $numberOfPage; $i++) {
                ?>
                  <li class="page-item"><a class="page-link" href="orders.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php } ?>
                <li class="page-item"><a style="pointer-events: <?php echo $page == $numberOfPage ? "none" : "" ?>;" class="page-link" href="orders.php?page=<?php echo $page + 1 ?>">Next</a></li>
              </ul>
            </nav>

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