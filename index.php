<!-- front view of index page -->
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Management System</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-10 col-11 m-auto">
    
      
    <h3 class="text-center mt-2"><a href="login.php">Admin Login</a></h3>
    

  <div class="text-center">
      <div class="card">
        <div class="card-header">
        <h2>Welcome to Student Management System</h2>
        </div>
        
      </div>
  </div>

  <form method="post" action="index.php">
    <table class="table table-striped table-hover table-bordered">
        <tr class="bg-dark text-white text-center">
          <td colspan="2" class="bg-danger"><h5>Student Information</h5></td>
        </tr>
        
        <tr>
          <td>Choose Standard</td>


          <td>
            <select name="std">
              <option value="1">1st</option>
              <option value="2">2nd</option>
              <option value="3">3rd</option>
              <option value="4">4th</option>
              <option value="5">5th</option>
              <option value="6">6th</option>
              <option value="7">7th</option>
              <option value="8">8th</option>
              <option value="9">9th</option>
              <option value="10">10th</option>

            </select>
          </td>
        </tr>
        <tr>
          <td>Enter Rollno</td>
          <td>
            <input type="text" name="rollno" required />
          </td>
        </tr>
        <tr class="text-center">
          <td colspan="2"><button class="btn btn-danger" type="submit" name="submit">show info</button></td>
        </tr>
    </table>
  </form> 

</div>
        </div>
    </div>
    
   
	 
</body>
</html>

<!-- fetching of student data from database -->
<?php 
  include('dbcon.php');
   if(isset($_POST['submit']))
   {
    include('function.php');
      $standard=$_POST['std'];
      $rollno=$_POST['rollno'];

    // show details function call
    showDetails($standard,$rollno);
   }
  ?>