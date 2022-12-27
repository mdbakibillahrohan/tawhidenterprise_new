<!-- Modal 1 -->
  <div class="modal fade" id="profileModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Profile Management</h4>
          <ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#4a">My Profile</a></li>
        <li><a data-toggle="tab"  href="#4b">Edit Your Profile</a></li>     
		  <!--   <li><a data-toggle="tab"  href="#4c">Add Rules</a></li>
        <li><a data-toggle="tab"  href="#4d">settings</a></li> -->
		  </ul>
<?php 
        require_once('db.php');    

        $username=$_COOKIE['CurrentUser'];
        
        $ShowQuery = "SELECT * FROM userregistration WHERE username = '$username' ";

          $runQuery = mysqli_query($conn, $ShowQuery);

          if($runQuery == true){
            while ($myData = mysqli_fetch_array($runQuery)) { ?>
        </div>
        <div class="modal-body">     
           <div class="tab-content clearfix">
        <div class="tab-pane active" id="4a">
           <form class="form-horizontal" action="#" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pname">Person Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="pname" placeholder="Enter your name in English" name="pname" value="<?php echo $myData['fullname_eng']; ?>" readonly>
      </div>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="pname2" placeholder="Enter your name in Bangla" name="pname2" value="<?php echo $myData['fullname_bng']; ?>" readonly >
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="fname">Fathers Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="fname" placeholder="Enter your name in English" name="fname" value="<?php echo $myData['fathersname_eng']; ?>" readonly>
      </div>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="fname2" placeholder="Enter your name in Bangla" name="fname2" value="<?php echo $myData['fathersname_bng']; ?>" readonly>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="mname">Mothers Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="mname" placeholder="Enter your mothes name in English" name="mname" value="<?php echo $myData['mothersname_eng']; ?>" readonly>
      </div>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="mname2" placeholder="Enter your mothers name in Bangla" name="mname2" value="<?php echo $myData['mothersname_bng']; ?>" readonly>
      </div>
    </div>   
     <div class="form-group col-sm-4">
      <label class="control-label userinput" for="name">Date of Birth:</label>      
        <input type="text" class="form-control userinput" id="name" placeholder="Enter date of birth" name="dob" value="<?php echo $myData['date_of_birth']; ?>" readonly>      
    </div>
     <div class="form-group col-sm-3">
      <label class="control-label" for="nid">NID Number:</label>      
        <input type="text" class="form-control" id="nid" placeholder="Enter your NID Number" name="nid" value="<?php echo $myData['nid_number']; ?>" readonly>      
    </div>
     <div class="form-group col-sm-3">
      <label class="control-label" for="birth">Birth Certificate Number:</label>
        <input type="text" class="form-control" id="birth" placeholder="Enter your birth certificate no" name="birth" value="<?php echo $myData['birth_certificate_no']; ?>" readonly>      
    </div>
     <div class="form-group col-sm-3">
      <label class="control-label" for="passportname">Passport Number:</label>      
        <input type="text" class="form-control" id="passportname" placeholder="Enter your passport no" name="passport" value="<?php echo $myData['passport_no']; ?>" readonly>      
    </div>       
     <div class="form-group col-sm-4">
      <label class="control-label userinput" for="gender">Gender:</label>
        <input type="text" class="form-control userinput" id="gender" placeholder="Enter your gender" name="gender" value="<?php echo $myData['gender']; ?>" readonly>      
    </div>
     <div class="form-group col-sm-3">
      <label class="control-label" for="religion">Religion:</label>      
        <input type="text" class="form-control" id="religion" placeholder="Enter your religion" name="religion" value="<?php echo $myData['religion']; ?>" readonly>      
    </div> 
    <div class="form-group col-sm-3 ml-3">
      <label class="control-label" for="bloodgroup">Blood Group:</label>      
        <input type="text" class="form-control" id="bloodgroup" placeholder="Enter your blood group" name="bloodgroup" value="<?php echo $myData['blood_group']; ?>" readonly>      
    </div>
     <div class="form-group col-sm-3">
      <label class="control-label" for="marital">Marital Status:</label>      
        <input type="text" class="form-control" id="marital" placeholder="Enter Marital Status" name="marital" value="<?php echo $myData['marital_status']; ?>" readonly>      
    </div>   
     <div class="form-group col-sm-5">
      <label class="control-label userinput" for="email">Email Address:</label>      
        <input type="email" class="form-control userinput" id="email" placeholder="Enter your email address" name="email" value="<?php echo $myData['useremail']; ?>" readonly>      
    </div>   
     <div class="form-group col-sm-4">
      <label class="control-label" for="mobile">Mobile Number:</label>      
        <input type="text" class="form-control" id="mobile" placeholder="Enter your mobile number" name="mobile" value="<?php echo $myData['user_mobile']; ?>" readonly>      
    </div>   
     <div class="form-group col-sm-4">
      <label class="control-label" for="othermobile">Other Mobile Number:</label>      
        <input type="text" class="form-control" id="othermobile" placeholder="Enter other mobile no" name="othermobile" value="<?php echo $myData['user_other_number']; ?>" readonly>      
    </div>      
      
    <div class="form-group col-sm-12">        
        <button type="submit" class="btn btn-default"><a href="">Sav As PDF</a></button>   
   
    </div>     
  </form>
  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
        <div class="tab-pane" id="4b">         
                 
    <form class="form-horizontal" action="update_user_info.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pname">Person Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="pname" placeholder="Enter your name in English" name="pname" value="<?php echo $myData['fullname_eng']; ?>" required>
      </div>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="pname2" placeholder="Enter your name in Bangla" name="pname2" value="<?php echo $myData['fullname_bng']; ?>" >
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="fname">Fathers Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="fname" placeholder="Enter your name in English" name="fname" value="<?php echo $myData['fathersname_eng']; ?>">
      </div>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="fname2" placeholder="Enter your name in Bangla" name="fname2" value="<?php echo $myData['fathersname_bng']; ?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="mname">Mothers Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="mname" placeholder="Enter your mothes name in English" name="mname" value="<?php echo $myData['mothersname_eng']; ?>">
      </div>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="mname2" placeholder="Enter your mothers name in Bangla" name="mname2" value="<?php echo $myData['mothersname_bng']; ?>">
      </div>
    </div>   
     <div class="form-group col-sm-4">
      <label class="control-label userinput" for="name">Date of Birth:</label>      
        <input type="text" class="form-control userinput" id="name" placeholder="Enter date of birth" name="dob" value="<?php echo $myData['date_of_birth']; ?>">      
    </div>
     <div class="form-group col-sm-3">
      <label class="control-label" for="nid">NID Number:</label>      
        <input type="text" class="form-control" id="nid" placeholder="Enter your NID Number" name="nid" value="<?php echo $myData['nid_number']; ?>">      
    </div>
     <div class="form-group col-sm-3">
      <label class="control-label" for="birth">Birth Certificate Number:</label>
        <input type="text" class="form-control" id="birth" placeholder="Enter your birth certificate no" name="birth" value="<?php echo $myData['birth_certificate_no']; ?>">      
    </div>
     <div class="form-group col-sm-3">
      <label class="control-label" for="passportname">Passport Number:</label>      
        <input type="text" class="form-control" id="passportname" placeholder="Enter your passport no" name="passport" value="<?php echo $myData['passport_no']; ?>">      
    </div>       
     <div class="form-group col-sm-4">
      <label class="control-label userinput" for="gender">Gender:</label>
        <input type="text" class="form-control userinput" id="gender" placeholder="Enter your gender" name="gender" value="<?php echo $myData['gender']; ?>">      
    </div>
     <div class="form-group col-sm-3">
      <label class="control-label" for="religion">Religion:</label>      
        <input type="text" class="form-control" id="religion" placeholder="Enter your religion" name="religion" value="<?php echo $myData['religion']; ?>">      
    </div> 
    <div class="form-group col-sm-3 ml-3">
      <label class="control-label" for="bloodgroup">Blood Group:</label>      
        <input type="text" class="form-control" id="bloodgroup" placeholder="Enter your blood group" name="bloodgroup" value="<?php echo $myData['blood_group']; ?>">      
    </div>
     <div class="form-group col-sm-3">
      <label class="control-label" for="marital">Marital Status:</label>      
        <input type="text" class="form-control" id="marital" placeholder="Enter Marital Status" name="marital" value="<?php echo $myData['marital_status']; ?>">      
    </div>   
     <div class="form-group col-sm-5">
      <label class="control-label userinput" for="email">Email Address:</label>      
        <input type="email" class="form-control userinput" id="email" placeholder="Enter your email address" name="email" value="<?php echo $myData['useremail']; ?>" required>      
    </div>   
     <div class="form-group col-sm-4">
      <label class="control-label" for="mobile">Mobile Number:</label>      
        <input type="text" class="form-control" id="mobile" placeholder="Enter your mobile number" name="mobile" value="<?php echo $myData['user_mobile']; ?>" required>      
    </div>   
     <div class="form-group col-sm-4">
      <label class="control-label" for="othermobile">Other Mobile Number:</label>      
        <input type="text" class="form-control" id="othermobile" placeholder="Enter other mobile no" name="othermobile" value="<?php echo $myData['user_other_number']; ?>">      
    </div>   
    
    <div class="form-group col-sm-5">
      <label class="control-label userinput" for="username">User Name:</label>                
        <input type="text" class="form-control userinput" id="username" placeholder="Enter your user name" name="username" value="<?php echo $myData['username']; ?>" readonly>      
    </div>
    <div class="form-group col-sm-4">
      <label class="control-label" for="pwd">Password:</label>                
        <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="pwd" id="pwd" value="" required="">      
    </div>
    <div class="form-group col-sm-4">
      <label class="control-label" for="cpwd">Confirm Password:</label>                
        <input type="password" class="form-control" id="cpwd" placeholder="Retype your password" id="cpwd" name="cpwd" value="" required="">      
    </div>    
    <div class="form-group col-sm-12">        
        <button type="submit" id="update" class="btn btn-default">Update</button>   
         <!-- <button type="reset" class="btn btn-default">Reset</button> -->  
    </div>     
  </form>
    <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
       <!--  <div class="tab-pane" id="4c">
          <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
        </div>
          <div class="tab-pane" id="4d">
          <h3>We use css to change the background color of the content to be equal to the tab</h3>
        </div> -->
      </div>
      </div>
      
    </div>
  </div>
</div>

                   <?php }
          
          }
        ?>

     