     <!-- session start -->
<?php
 session_start();

  		if(isset($_SESSION['uid']))
  		{
  			echo "";
  		}
		  else
		  {
             header('location: ../login.php');
		  }
?>


<?php
  include('header.php');
?>

		   <!-- admindash view page -->
		   
		   <br>
<div class="text-center col-lg-10 col-md-11 col-11 m-auto">
<div class="card bg-info">
   <div class="card-header">
   <h5><a href="../index.php" style="float:left; margin-left:1px;  color:white;">Back to Homepage</a></h5>
   <h5 class=""><a href="../logout.php" style="float:right; margin-right:10px; color:white;">Logout</a></h5>
   <h1>Welcome to Admin Dashboard</h1>
   </div>
</div>


<div>
<br>
<table class="table table-striped table-hover table-bordered">
	
		<tr>
			<td><h6 class="text-primary">1.</h6></td>
			<td><h6><a href="addstudent.php">Insert Student Details</a></h6></td>
		</tr>
		<tr>
			<td><h6 class="text-primary">2.</h6></td>
			<td><h6><a href="updatestudent.php">Update Student Details</a></h6></td>
		</tr>
		<tr>
			<td><h6 class="text-primary">3.</h6></td>
			<td><h6><a href="deletestudent.php">Delete Student Details</a></h6></td>
		</tr>
	
</table>
</div>
</div>
</body>
</html>
