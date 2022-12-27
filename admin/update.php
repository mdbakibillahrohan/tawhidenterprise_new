  <?php
  session_start();
  include("../db.php");
  include "sidenav.php";
  include "topheader.php";

  if(isset($_POST['btn_update'])){
    $product_name = $_POST['product_name'];
    $reguler_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $old_price = $_POST['product_old_price']; 
    $brand = $_POST['product_brand']; 
    $color = $_POST['product_color']; 
    $size = $_POST['product_size']; 
    $quantity = $_POST['product_qty'];
    $product_status = $_POST['status'];  
    

 //picture coding
    $picture_name=$_FILES['picture']['name'];
    $picture_type=$_FILES['picture']['type'];
    $picture_tmp_name=$_FILES['picture']['tmp_name'];
    $picture_size=$_FILES['picture']['size'];

    if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
    {
      if($picture_size<=50000000)
        
        $pic_name=time()."_".$picture_name;
      move_uploaded_file($picture_tmp_name,"/home/tawhid/web/tawhidenterpries.com/public_html/product_images/".$pic_name);



      $servername = "localhost";
      $username = "tawhid_tawhid";
      $password = "mF7cPmrCyF";
      $dbname = "tawhid_onlineshopping";

// Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $product_id=$_GET['product_id'];

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_name=$_POST['product_name'];}
        
        $sql = "UPDATE products SET product_title ='$product_name', product_brand ='$brand', product_image ='$pic_name', product_price ='$reguler_price' ,product_old_price ='$old_price' , product_desc ='$product_desc' , product_ram ='$color', product_storage ='$size', product_qty ='$quantity', product_status ='$product_status' WHERE product_id= $product_id";

        if ($conn->query($sql) === TRUE) {
          echo '<script>alert("product Update Successfully...")</script>';
        } else {

          echo "Error updating record: " . $conn->error;
        }

        $conn->close();

        
      }}

      $product_id=$_GET['product_id'];

      $ShowQuery = "SELECT * FROM products WHERE product_id = $product_id";
      $runQuery = mysqli_query($con, $ShowQuery);

      if($runQuery == true){
        while ($myData = mysqli_fetch_array($runQuery)) { 
          ?>
          <!-- End Navbar -->
          <div class="content">
            <div class="container-fluid">
              <form action="" method="POST" type="form" name="form" enctype="multipart/form-data">
                <div class="row">
                  
                  
                 <div class="col-md-7">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h5 class="title">Add Product</h5>
                    </div>
                    <div class="card-body">
                      
                      <div class="row">
                        
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Product Title</label>
                            <input type="text" id="product_name" value="<?php echo $myData['product_title']; ?>" name="product_name" class="form-control" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="">
                            <label for="">Add Image</label>                       
                            <input type="file" name="picture" class="btn btn-fill btn-success" id="picture" > <img src="../product_images/<?php echo $myData['product_image']; ?>" style="width:100px; height:100px; margin-bottom: 10px; border:groove #000">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Description</label>
                            <textarea rows="4" cols="80" id="details" name="product_desc" class="form-control" required ><?php echo $myData['product_desc']; ?></textarea>
                          </div>
                        </div>
                        
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Comission Pricing</label>
                            <input type="text" id="price" name="product_price" value="<?php echo $myData['product_price']; ?>" class="form-control" required >
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Old Pricing</label>
                            <input type="text" id="price" name="product_old_price" value="<?php echo $myData['product_old_price']; ?>" class="form-control" required >
                          </div>
                        </div>
                      </div>
                      
                      
                      
                    </div>
                    
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h5 class="title">Categories</h5>
                    </div>
                    <div class="card-body">
                      
                      <div class="row">
                        
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="brand">Product Brand</label>                      
                            <select  class="form-control" name="product_brand" id="brand" required>    <option value="<?php echo $myData['product_brand']; ?>"><?php echo $myData['product_brand']; ?></option>   
                              <option value="Mens Item">Mens Item</option>
                              <option value="Womens Item">Womens Item</option>
                              <option value="Kids Item">Kids Item</option>
                              <option value="Others">Others</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                           <label for="color">Product Color</label>
                           <select class="form-control" name="product_color" id="color" required>
                            <option value="<?php echo $myData['product_ram']; ?>"><?php echo $myData['product_ram']; ?></option> 
                            <option value="Red">Red</option>
                            <option value="Green">Green</option>
                            <option value="Blue">Blue</option>
                            <option value="White">White</option>
                             <option value="Black">Black</option>
                          </select>
                        </div>
                      </div>
                      
                      
                      <div class="col-md-12">
                        <div class="form-group">                      
                          <label for="size">Product Size</label>
                          <select class="form-control" name="product_size" id="size" required>
                            <option value="<?php echo $myData['product_storage']; ?>"><?php echo $myData['product_storage']; ?></option> 
                            <option value="Large">Large</option>
                            <option value="Medium">Medium</option>
                            <option value="Small">Small</option>
                            
                          </select>
                          
                        </div>
                      </div>

                       <div class="col-md-12">
                          <div class="form-group">
                            <label>Product Quantity</label>
                            <input type="text" id="qty" name="product_qty" value="<?php echo $myData['product_qty']; ?>" class="form-control" required >
                          </div>
                        </div>
                      
                      <div class="col-md-12">
                        <div class="form-group">
                         <label for="status">Product Status</label>
                         <select class="form-control" name="status" id="status" required>                                
                          <option value="<?php echo $myData['product_status']; ?>"><?php echo $myData['product_status']; ?></option> 
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>                          
                        </select>

                      </div>
                    </div>
                    
                  </div>
                  <div class="card-footer">
                    <button type="submit" id="btn_update" name="btn_update" required class="btn btn-fill btn-primary">Update Product</button>
                  </div>
                </div>
              </div>
              
            </div>
          </form>
          
        </div>
      </div>
      <?php
      include "footer.php";
    }}
    ?>

