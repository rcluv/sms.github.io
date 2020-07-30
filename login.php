            <!-- login page -->
			<!-- session start and making session id -->
<?php
   session_start();
   if(isset($_SESSION['uid'])) 
   {
	   header('location:admin/admindash.php');
   }
?>
          <!--  view of login page  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="bootstrap.min.js"></script>
</head>
<body>
    <div class="col-lg-4 col-md-10 col-10 m-auto">
	    <br>
		<form action="login.php" method="POST">
		<div class="card">
			<div class="card-header bg-dark">
			<h1 class="text-center text-white">Admin Login</h1>
			</div>
			
		
		<br>
	   
		
			<label>Username:</label>
			<input class="form-control" type="text" name="uname">
                <br>
			<label>Password:</label>
			<input class="form-control" type="text" name="pass">
			        <br>
			<button class="btn btn-danger" type="submit" name="login" value="login">submit</button>
			</div>
	    </form>
               <br>
		<button class="btn btn-dark" type="submit"><a href="index.php" class="text-white">Go Back to Homepage</a></button>
	</div>
     
	
	

   

   
</body>
</html>

    <!-- matching database with username and password using query -->
<?php

  include('dbcon.php');

  if(isset($_POST['login']))
  {
  	$username = $_POST['uname'];
  	$password = $_POST['pass'];
  	$qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
  	$run=mysqli_query($con,$qry);
  	$row = mysqli_num_rows($run);
  	if($row <1)
  	{
  		?>
  		<script>
  		  alert('username or password not match!!');
  		  window.open('login.php','_self');
  		</script>
  	    <?php
  	}
  	else
  	{
		//   fetching of data from database and matching with username and password
  		$data=mysqli_fetch_assoc($run);
		  $Id=$data['ID'];
		  



		session_start();
		  
  		$_SESSION['uid']=$Id;
  		header('location:admin/admindash.php');
  	}
  }

?>
