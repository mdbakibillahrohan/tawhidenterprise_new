<?php
include "header.php";
include "db.php";


if (isset($_POST['cart_id'])) {
    $cart_id = $_POST['cart_id'];
    $cartDeletQuery = "DELETE FROM cart WHERE id = '$cart_id'";
    mysqli_query($con, $cartDeletQuery);
}


?>


<section class="section">
    <div class="container">

        <!-- <div id="cart_checkout">

        </div> -->
        <?php echo $_SESSION["session_id"]; ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qunatity</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $user_id = $_SESSION['uid'];
                $sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
                $data_list = mysqli_query($con, $sql);
                $sl = 1;
                while ($data = mysqli_fetch_assoc($data_list)) {
                    $product_id = $data['p_id'];
                    $productDataGetQuery = "SELECT * from products WHERE product_id='$product_id'";
                    $product = mysqli_fetch_assoc(mysqli_query($con, $productDataGetQuery));
                ?>


                    <tr>
                        <form method="POST" action="cart.php">
                            <input hidden name="cart_id" value="<?php echo $data['id'] ?>" type="number">
                            <th scope="row"><?php echo $sl ?></th>
                            <td><?php echo $product['product_title'] ?></td>
                            <td id="price<?php echo $data['id'] ?>"><?php echo $product['product_price'] ?></td>
                            <td><input for="<?php echo $data['id'] ?>" class="quantities" value="<?php echo $data['qty'] ?>" type="number"></td>
                            <td class="amounts" id="amount<?php echo $data['id'] ?>">
                                <?php echo $product['product_price'] * $data['qty'] ?>
                            </td>
                            <td><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button></td>
                        </form>
                    </tr>
                <?php
                    $sl++;
                }
                ?>
                <tr>
                    <th>Subtotal</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th id="subtotal"></th>
                </tr>
            </tbody>
        </table>
        <div style="width: 100%;" class="d-flex justify-content-between">
            <a class="btn btn-success" href="store.php">Continue Shopping</a>
            <a class="btn btn-danger" href="checkout.php">Ready to Checkout</a>
        </div>
    </div>
</section>

<script>
    function subtotalCount() {
        let amounts = document.getElementsByClassName("amounts");
        let subTotal = 0;
        for (let a = 0; a < amounts.length; a++) {
            subTotal = subTotal + parseInt(amounts[a].innerText);
        }
        let subTotalElement = document.getElementById("subtotal");
        subTotalElement.innerText = "BDT " + subTotal;
    }


    function qtyUpdate(cart_id, quantity) {
        console.log(quantity);
        console.log(cart_id);
        $.ajax({
            url: 'update_cart.php',
            method: "POST",
            data: {
                'update_cart_id': cart_id,
                'quantity': quantity,
            },
            success: function(response) {
                // console.log("response is ", JSON.parse(response));
                // console.log(response)
            },
            error: function(e) {
                console.log("error");
                console.log(e);
            }
        });
    }



    subtotalCount();
    let quantities = document.getElementsByClassName("quantities");
    for (let n = 0; n < quantities.length; n++) {
        quantities[n].addEventListener("change", (e) => {
            let amount = document.getElementById("amount" + e.target.getAttribute("for"));
            let price = document.getElementById("price" + e.target.getAttribute("for"));
            amount.innerText = parseInt(price.innerText) * e.target.value;
            qtyUpdate(e.target.getAttribute("for"), e.target.value);
            subtotalCount();
        });
    }
</script>
<?php
include "newslettter.php";
include "footer.php";
?>