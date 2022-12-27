<!-- Modal 1 -->
  <div class="modal fade" id="msgModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Messages</h4>    

        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col col-sm-6">
             <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Select Designation
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Manager</a></li>
                  <li><a href="#">Asst Manager</a></li>
                  <li><a href="#">Software Engineer</a></li>
                </ul>
              </div>
              </div>
               <div class="col col-sm-6">
             <div class="dropdown dropdown_sub">
                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Select Subject
                </span><span class="caret"> </span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Subject One</a></li>
                  <li><a href="#">Subject Two</a></li>
                  <li><a href="#">Subject Three</a></li>
                </ul>
              </div> 
       </div>
          </div>
          <br>
          <div class="row">
            <ul class="nav nav-tabs">
            <li class="active col col-sm-4"><a data-toggle="tab" href="#msgsent">Message Sent Item</a></li>
             <li class="col col-sm-4"><a data-toggle="tab" href="#msgrecieve">Message Recive Item</a></li>
              <li class="col col-sm-4"><a data-toggle="tab" href="#msgother">Others Item</a></li>
            </ul>
          </div><br>
        <div class="row">
          <div class="col col-sm-6 text-left">
           <div class="col col-sm-4 form-group float-left">
            
              <select class="form-control" id="sel1">
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>

              </select> 
              
            </div>
          </div>
        
          <div class="col col-sm-6 text-right">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
          </div>
        </div> 
        <div class="tab-content clearfix">
        <div class="tab-pane active" id="msgsent">    
          <table class="table">
    <thead>
      <tr>
        <th>To</th>
        <th>Subject</th>
        <th>Details</th>
        <th>Comments</th>
        <th>Date/Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>example@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Forward</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>      
      <tr class="success">
       <td>xyz@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Forward</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="danger">
        <td>helloworld@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Forward</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="info">
        <td>jhon-poor@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Forward</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="warning">
       <td>example@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Forward</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="active">
        <td>testbd@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Forward</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr>
        <td>example@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Forward</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>      
      <tr class="success">
       <td>xyz@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Forward</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="danger">
        <td>helloworld@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Forward</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="info">
        <td>jhon-poor@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Forward</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>     
      
            </tbody>
          </table>
        </div>

        <div class="tab-pane" id="msgrecieve">    
          <table class="table">
    <thead>
      <tr>
        <th>From</th>
        <th>Subject</th>
        <th>Details</th>
        <th>Comments</th>
        <th>Date/Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>recive@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>      
      <tr class="success">
       <td>xyz@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="danger">
        <td>helloworld@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="info">
        <td>jhon-poor@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="warning">
       <td>example@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="active">
        <td>testbd@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr>
        <td>example@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>      
      <tr class="success">
       <td>xyz@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="danger">
        <td>helloworld@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="info">
        <td>jhon-poor@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>     
      
    </tbody>
  </table>
</div>
        <div class="tab-pane" id="msgother">    
          <table class="table">
    <thead>
      <tr>
        <th>From</th>
        <th>Subject</th>
        <th>Details</th>
        <th>Comments</th>
        <th>Date/Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>other@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>      
      <tr class="success">
       <td>xyz@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="danger">
        <td>helloworld@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="info">
        <td>jhon-poor@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="warning">
       <td>example@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="active">
        <td>testbd@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr>
        <td>example@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>      
      <tr class="success">
       <td>xyz@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
       <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="danger">
        <td>helloworld@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>
      <tr class="info">
        <td>jhon-poor@outlook.com</td>
        <td>Project Plan</td>
        <td>Lorem ipsum....</td>
        <td>No comments here</td>
        <td>02/05/2021 03:44</td>
        <td><a href="#">Reply</a> | <a href="#">Remove</a> | <a href="#">Open</a></td>
      </tr>     
      
    </tbody>
  </table>
</div>
</div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      
    </div>
  </div>
</div>