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
  include('../dbcon.php');

  $sid = $_GET['sid'];
  $sql="SELECT * FROM `student` WHERE `id`='$sid'";
  $run=mysqli_query($con,$sql);

  $data=mysqli_fetch_assoc($run);
?>
<div class="col-lg-10 col-md-11 col-11 m-auto">
<form method="post" action="updatedata.php" enctype="multipart/form-data">
    <table class="table table-striped table-hover table-bordered">
    
            <tr>
                <td>Roll No</td>
                <td><input class="col-lg-8" type="text" name="rollno" value="<?php echo $data['rollno']; ?>" required></td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><input class="col-lg-8" type="text" name="name" value="<?php echo $data['name']; ?>" required></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input class="col-lg-8" type="text" name="city" value="<?php echo $data['city']; ?>" required></td>
            </tr>
            <tr>
                <td>Parents Contact no</td>
                <td><input class="col-lg-8" type="text" name="pcon" value="<?php echo $data['pcon']; ?>" required></td>
            </tr>
            <tr>
                <td>Standard</td>
                <td><input class="col-lg-8" type="number" name="std" value="<?php echo $data['std']; ?>" required></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input class="col-lg-8 col-md-4" type="file" name="simg" required></td>
            </tr>
            <tr>
                
                <td colspan="2" align="center">

                   <input type="hidden" name="sid" value="<?php echo $data['id'] ?>" />
                   
                   <button class="btn btn-danger mr-5" name="submit">submit</button>
                </td>
            
            </tr>
        
    </table>
</form></div>