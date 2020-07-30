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
<div class="col-lg-10 col-md-11 col-11 m-auto">
<table class="table table-striped table-hover table-bordered">
   <form method="post" action="deletestudent.php">
       <tr>
          <th>Enter Standard</th>
          <td><input type="number" name="standard" placeholder="Enter Standard" required="required"></td>

          <th>Enter Student Names</th>
          <td><input type="text" name="stuname" placeholder="Enter Student Name" required="required"></td>

          <td colspan="2"><button class="btn btn-dark" type="submit" name="submit">Search</button></td>
       </tr>
   </form>
</table>
  
<table class="table table-striped table-hover table-bordered">
<tr style="background-color:#000; color:#fff;">
     <th>No</th>
     <th>Image</th>
     <th>Name</th>
     <th>Rollno</th>
     <th>Edit</th>
  </tr>

<?php
  include('../dbcon.php');
  if(isset($_POST['submit']))
  {
      
      $standard = $_POST['standard'];
      $name = $_POST['stuname'];
      $sql="SELECT * FROM student WHERE `std`='$standard' AND `name` LIKE '%$name%'";

      $run =mysqli_query($con,$sql);
      $row =mysqli_num_rows($run);
      if($row <1)
      {
          echo "<tr><td colspan=5>no records found.</td></tr>";
      }
      else
      {
          $count=0;
          while($data=mysqli_fetch_assoc($run))
          {
              $count++;
              ?>
                <tr align="center">
                <td><?php echo $count; ?></td>
                <td><img src="../dataimg/<?php echo $data['image'] ?>" style="max-width:100px;" /></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['rollno'] ?></td>
                <td><a href="deleteform.php?sid=<?php echo $data['id'] ?>">Delete</a></td>
                </tr>
              <?php
          }
      }
  }
?>
</table></div>

