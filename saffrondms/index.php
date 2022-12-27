<?php include 'header.php'; ?>

<div class="row">
	
<div id="mySidenav" class="col col-sm-3 bg-info left-side">
	<input type="checkbox" id="checkTab" name="checkTab" checked/>
	  <label class="menu" for="checkTab">
	      <span class="icon"></span>
	  </label>	  
	<ul class="tabs" style="list-style: none;">		  
		<li><a href="#menu"><img src="img/home.png" width="20"> Dashboar</a></li>
		<li><a data-toggle="modal" data-target="#branchModal" href="#"><img src="img/branchf.png" width="20"> Branch Management</a></li>
		<li><a data-toggle="modal" data-target="#profileModal" href="#"><img src="img/profile.png" width="20"> Profile Management</a></li>
		<li><a data-toggle="modal" data-target="#usermModal" href="#"><img src="img/userm.png" width="20"> User Management</a></li>
		<li><a  data-toggle="modal" data-target="#docmModal" href="#"><img src="img/home.png" width="20"> Document Management</a></li>		
		<li><a data-toggle="modal" data-target="#groupmModal" href="#"><img src="img/group.png" width="20"> Group Management</a></li>
		<li><a data-toggle="modal" data-target="#msgModal" href="#"><img src="img/home.png" width="20">Mesaages</a></li>
		<li><a data-toggle="modal" data-target="#reportModal" href="#"><img src="img/home.png" width="20">Report</a></li>
		<li><a data-toggle="modal" data-target="#settingModal" href="#"><img src="img/home.png" width="20">Settings</a></li>
	</ul>
</div>

<div class="col-sm-9 right-side">	
	<div class="row">		
		<div class="col col-sm-3 bg-success">
			<h2>Total Documents</h2>
			<strong>100</strong>
			<span class="text-warning">for last month</span></div>
		<div class="col col-sm-3 bg-danger">
			<h2>Total Users</h2>
			<strong>170</strong>
			<span class="text-warning">for last month</span></div>
		<div class="col col-sm-3 bg-warning">
			<h2>Total Groups</h2>
			<strong>23</strong>
			<span class="text-warning">for last month</span></div>
		<div class="col col-sm-3 bg-success">
			<h2>Total Branches</h2>
			<strong>46</strong>
			<span class="text-warning">for last month</span></div>
	</div>
	<div class="row">
		
			<div class="col col-sm-6 section">
				
				<h2>Total Documents Chart</h2>
				<img src="img/circle.png" width="180" style="margin-left: 100px; margin-top: 50px">	
				<div class="circle_text">
				<ul>
					<li><a href=""><img src="img/triangle.png">Released Documents (40)</a></li>
					<li><a href=""><img src="img/trired.png">Unreleased Documets (113)</a></li>
					<li><a href=""><img src="img/triblue.png">Archived Documents (25)</a></li>
				</ul>
				</div>			
			</div>

			
		<div class="col col-sm-6 section">
				<h2>Month Wise Documents Chart</h2>
				<img src="img/chart.png" width="480" style="margin-top: 50px">	
			</div> 
	


</div>
<?php include 'footer.php';?>
</div>
<?php include 'functions.php';?>

 
 
</body>

</html>

 