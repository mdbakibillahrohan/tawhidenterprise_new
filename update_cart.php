<?php
include "db.php";


if (isset($_POST['update_cart_id'])) {
    $update_cart_id = $_POST['update_cart_id'];
    $quantity = $_POST['quantity'];
    $cartQuantityUpdateQuery = "UPDATE cart SET qty = '$quantity' WHERE id='$update_cart_id'";
    if (mysqli_query($con, $cartQuantityUpdateQuery)) {
        echo json_encode(array('success' => 1));
    } else {
        echo json_encode(array('success' => 0));
    }
}
