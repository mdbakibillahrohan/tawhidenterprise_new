  <?php
session_start();
include("../db.php");


if(isset($_POST['btn_save']))
{
$product_name=$_POST['product_name'];
$brand=$_POST['product_brand'];
$product_description=$_POST['product_desc'];
$reguler_price=$_POST['product_price'];
$old_price=$_POST['product_old_price'];
$product_type=$_POST['product_type'];
$color=$_POST['product_ram'];
$size=$_POST['product_storage'];
$status=$_POST['status'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../product_images/".$pic_name);
		
mysqli_query($con,"insert into products (product_cat, product_brand,product_title,product_price,product_old_price,product_desc, product_image,product_ram,product_storage,product_status) values ('$product_type','$brand','$product_name','$reguler_price', '$old_price', '$product_description','$pic_name','$color', '$size' ,'$status')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}

mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
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
                        <input type="text" id="product_name" required name="product_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <label for="">Add Image</label>
                        <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" >
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="80" id="details" required name="product_desc" class="form-control"></textarea>
                      </div>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Comission Pricing</label>
                        <input type="text" id="price" name="product_price" required class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Old Pricing</label>
                        <input type="text" id="price" name="product_old_price" required class="form-control" >
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
                         <select class="form-control" name="product_brand" id="brand" required>
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
                        <select class="form-control" name="product_ram" id="color" required>
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
                        <select class="form-control" name="product_storage" id="size" required>
                          <option value="Large">Large</option>
                          <option value="Medium">Medium</option>
                          <option value="Small">Small</option>
                          <option value="Blue">Blue</option>
                        </select>
                        
                      </div>
                    </div>
                  
                   <div class="col-md-12">
                      <div class="form-group">
                  <select class="form-control" name="status" id="status" required>
                    <label for="status">Product Status</label>
                          <option>Select Status</option>
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>                          
                        </select>
                     </div>
                    </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Submit</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      <?php
include "footer.php";
?>