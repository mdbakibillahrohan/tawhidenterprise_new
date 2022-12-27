<?php 
include('database_connection.php');
include('header.php');

?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <br />
           
            <br />
            <div class="col-md-3">                              
                <div class="list-group">
                    <h3>Price</h3>
                    <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="5000" />
                    <p id="price_show">0 - 5000</p>
                    <div id="price_range"></div>
                </div>  

                 <div class="list-group">
                    <h3>Product Categories</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(product_keywords) FROM products WHERE product_status = 'Active' AND product_brand= 'OSAKA LED'
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector cat" value="<?php echo $row['product_keywords']; ?>" > <?php echo $row['product_keywords']; ?> </label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>       
           

                <div class="list-group">
                    <h3>Products Color</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(product_ram) FROM products WHERE product_status = 'Active' AND product_brand = 'Mens Item' 
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram" value="<?php echo $row['product_ram']; ?>" > <?php echo $row['product_ram']; ?> Color</label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
                
                <div class="list-group">
                    <h3>Products Size</h3>
                    <?php
                    $query = "
                    SELECT DISTINCT(product_storage) FROM products WHERE product_status = 'Active' AND product_brand = 'OSAKA LED'
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage" value="<?php echo $row['product_storage']; ?>"  > <?php echo $row['product_storage']; ?> Size</label>
                    </div>
                    <?php
                    }
                    ?>  
                </div>
            </div>

            <div class="col-md-9">
                 <strong>ELIT PANEL</strong>
                <div class="row filter_data">


                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
    text-align:center; 
    background: url('loader.gif') no-repeat center; 
    height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'mens_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var keywords = get_filter('keywords');
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"mens_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, keywords:keywords, brand:brand, ram:ram, storage:storage},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:300,
        max:5000,
        values:[100, 5000],
        step:50,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>

<?php include('footer.php');?>