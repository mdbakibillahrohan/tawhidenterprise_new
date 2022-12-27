<?php 
session_start();
include("../db.php");
$id = $_GET['product_id'];

// sql to delete a record
$sql = "DELETE FROM products WHERE product_id = $id"; 

if (mysqli_query($con, $sql)) {
    mysqli_close($con);
   header("location: productlist.php");
    exit;
} else {
    echo "Error deleting record";
}
?>