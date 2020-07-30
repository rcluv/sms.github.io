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
  include('titlehead.php');
?>

           <!-- page view of addstudent page -->
<div class="col-lg-10 col-md-11 col-11 m-auto">
<form method="post" action="addstudent.php" enctype="multipart/form-data">
    <table class="table table-striped table-hover table-bordered">

    
       
            <tr>
                <td>Roll No</td>
                <td><input type="text" name="rollno" placeholder="Enter Rollno" class="col-lg-8" required></td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="name" placeholder="Enter your name" class="col-lg-8" required></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city" placeholder="Enter your city" class="col-lg-8" required></td>
            </tr>
            <tr>
                <td>Parents Contact no</td>
                <td><input type="text" name="pcon" placeholder="Enter your parents no" class="col-lg-8" required></td>
            </tr>
            <tr>
                <td>Standard</td>
                <td><input type="number" name="std" placeholder="Enter standard" class="col-lg-8" required></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="simg"  class="col-lg-8 col-md-4" required></td>
            </tr>
            <tr>
                <td colspan="2">
                   <button class="btn btn-danger mr-5" name="submit">submit</button>
                </td>
            
            </tr>
        
    </table>
</form></div>
</body>
</html>

        <!-- Inserted data to database using sql query -->
<?php 
   include('../dbcon.php');
  if(isset($_POST['submit']))
  {
    
     $rollno= $_POST['rollno'];
     $name= $_POST['name'];
     $city= $_POST['city'];
     $pcon= $_POST['pcon'];
     $std= $_POST['std'];

    //  add and save upload image to database and dataimg folder
     $img= $_FILES['simg'] ['name'];
     $tempname = $_FILES['simg'] ['tmp_name'];

     move_uploaded_file($tempname,"../dataimg/$img");

     $qry="insert into student(rollno, name, city, pcon, std, image) values ('$rollno', '$name', '$city', '$pcon', '$std', '$img')";
     $run= mysqli_query($con, $qry); 

     if($run == true)
     {
         ?>
         <script>
            alert('Data Inserted successfully');
         </script>
         <?php
     }



  }
?>