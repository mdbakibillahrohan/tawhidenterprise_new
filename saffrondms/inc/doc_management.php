
<!-- Modal 1 -->
  <div class="modal fade" id="docmModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Documents Management</h4>
          <ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#2a">Add New Documents</a></li>           
		    <li><a data-toggle="tab"  href="#2c">Add Rules</a></li>
        <li><a data-toggle="tab"  href="#2d">Manage Categories</a></li>      
		  </ul>

        </div>
        <div class="modal-body">     
           <div class="tab-content clearfix">
        <div class="tab-pane active" id="2a">
           <div class="row">
             <div class="col col-md-6">
               <form class="form-horizontal" action="file_upload_core.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="doclabel" for="exampleFormControlFile1">File input</label>
                    <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload">
                  </div>
                  <div class="col-sm-12">
                    <label for="ftitle">File Name</label>
                    <input type="text" class="form-control" id="ftitle" placeholder="Enter file title here" name="filename" required="">
                  </div>
                  <div class="col-sm-12">
                      <label for="ftitle">File Type/Format</label>
                      <select class="form-control" name="fileformat" required >
                        <option></option>
                        <option>JPG</option>
                        <option>PNG</option>
                        <option>PDF</option>
                      </select>
                    </div>
                    <div class="col-sm-12">
                      <label for="ftitle">Categories</label>
                      <select class="form-control" name="filecategorie" required>
                        <option></option>
                        <option>Office Documents</option>
                        <option>Unofficial Documents</option>
                        <option>Others Documents</option>
                      </select>
                    </div>   
                    <div class="col-sm-12">
                      <label for="ftitle">Select Rule</label>
                      <select class="form-control" name="filerule" required>
                          <option></option>
                        <option>Administration</option>
                        <option>Admin</option>
                        <option>Local User</option>
                        <option>Viewer</option>
                      </select>
                    </div>                    
                    <div class="col-sm-12"> 
                    <button type="submit" name="submit" class="btn btn-primary mb-2">Submit File</button>
                    </div>
                </form>
              </div>
             <div class="col col-md-6"> 
              <form action="folder_upload_core.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="doclabel" for="exampleFormControlFile1">Folder input</label>
                    <input type="file" class="form-control-file" name="files[]" id="files" multiple directory="" webkitdirectory="" moxdirectory="../folder uploads" />
                  </div>
                      <div class="col-sm-12">
                      <label for="ftitle">Folder Name</label>
                      <input type="text" name="foldername" class="form-control" id="foltitle" placeholder="Enter folder title here" name="ftitle" required>
                    </div>
                    <div class="col-sm-12">
                      <label for="ftitle">Folder Type/Format</label>
                      <select class="form-control" name="folderformat" required >
                        <option></option>
                        <option>ETC</option>
                        <option>ZIP</option>
                        <option>RAR</option>
                      </select>
                    </div>
                    <div class="col-sm-12">
                      <label for="ftitle">Categories</label>
                      <select class="form-control" name="foldercategorie" required >
                        <option></option>
                        <option>Office Documents</option>
                        <option>Unofficial Documents</option>
                        <option>Others Documents</option>
                      </select>
                    </div> 
                    <div class="col-sm-12">
                      <label for="ftitle">Select Rule</label>
                      <select class="form-control" name="folderrule" required >
                         <option></option>
                        <option>Administration</option>
                        <option>Admin</option>
                        <option>Local User</option>
                        <option>Viewer</option>
                      </select>
                    </div>                     
                      <div class="col-sm-12">                  
                      <button type="submit" name="upload_folder" class="btn btn-primary mb-2">Submit Folder</button>
                    </div>                   
                </form>
              </div>
           </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>      
        <div class="tab-pane" id="2c">
         <div class="row">
           <div class="col col-sm-8">
             <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Default checkbox
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Checked checkbox
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Default checkbox
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Checked checkbox
                </label>
              </div>
            </div>
           <div class="col col-sm-4">
            <button type="button" class="btn btn-info" onclick="myFunction()" >Add New Rule</button>
             
           </div>
         </div>
         <br>
          <form id="myDIV" class="form-horizontal" action="#">
            <div class="form-group">
              <label class="control-label col-sm-2" for="pname">Rule Name:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="pname" placeholder="Enter rule name" name="pname">
              </div>
               <label class="control-label col-sm-2" for="pname">Rule Details:</label>
              <div class="col-sm-4">
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
               <button type="button" class="btn btn-default btn-success addbtn">Submit</button>
            </div>            
          </form>
          <table class="table">
        <thead>
          <tr>
            <th>Rule Name</th>        
            <th>Details</th>       
            <th>Date/Time</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
      <tr>
        <td>Administration</td>        
        <td>Lorem ipsum Lorem ipsum....</td>        
        <td>02/05/2021 03:44</td>
       <td><a href="#">Edit</a> | <a href="#">Remove</a></td>
      </tr>  
       <tr class="info">
        <td>Admin</td>        
        <td>Lorem ipsum Lorem ipsum....</td>        
        <td>02/05/2021 03:44</td>
       <td><a href="#">Edit</a> | <a href="#">Remove</a></td>
      </tr>  
        <tr>
        <td>Local User</td>        
        <td>Lorem ipsum Lorem ipsum....</td>        
        <td>02/05/2021 03:44</td>
       <td><a href="#">Edit</a> | <a href="#">Remove</a></td>
      </tr>  
       <tr class="info">
        <td>Viwer</td>        
        <td>Lorem ipsum Lorem ipsum....</td>        
        <td>02/05/2021 03:44</td>
       <td><a href="#">Edit</a> | <a href="#">Remove</a></td>
      </tr>  
     
        </tbody>
          </table> 
           <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>         
        </div>       
          <div class="tab-pane" id="2d">
         <form class="form-horizontal" action="#">
            <div class="form-group">
              <label class="control-label col-sm-2" for="pname">Categorie Title:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="pname" placeholder="Enter your Categorie name" name="pname">
              </div>
               <label class="control-label col-sm-2" for="pname">Categorie Details:</label>
              <div class="col-sm-4">
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
               <button type="button" class="btn btn-default btn-success addbtn">Add Categorie</button>
            </div>            
          </form>
          <table class="table">
    <thead>
      <tr>
        <th>Categorie Name</th>        
        <th>Details</th>       
        <th>Date/Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Office Documents</td>        
        <td>Lorem ipsum Lorem ipsum....</td>        
        <td>02/05/2021 03:44</td>
       <td><a href="#">Edit</a> | <a href="#">Remove</a></td>
      </tr>  
       <tr class="info">
        <td>Unoffice Documents</td>        
        <td>Lorem ipsum Lorem ipsum....</td>        
        <td>02/05/2021 03:44</td>
       <td><a href="#">Edit</a> | <a href="#">Remove</a></td>
      </tr>  
        <tr>
        <td>Others Documents</td>        
        <td>Lorem ipsum Lorem ipsum....</td>        
        <td>02/05/2021 03:44</td>
       <td><a href="#">Edit</a> | <a href="#">Remove</a></td>
      </tr>  
       <tr class="info">
        <td>Personal Documents</td>        
        <td>Lorem ipsum Lorem ipsum....</td>        
        <td>02/05/2021 03:44</td>
       <td><a href="#">Edit</a> | <a href="#">Remove</a></td>
      </tr>  
     
        </tbody>
          </table>
           <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div>
      </div>
      
    </div>
  </div>
</div>

<!-- <td><a href='admin_store_view.php?id=<?php echo $store_id1;?>'  data-id='$store_id1'  data-target='#testModal' data-toggle='modal'> $store_name</td> -->