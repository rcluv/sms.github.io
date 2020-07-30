
  <!-- fetching of students data from index page using function  -->
<?php

  function showDetails($standard,$rollno)
  {
      include('dbcon.php');

      $sql="SELECT * FROM `student` WHERE `std`='$standard' AND `rollno`='$rollno'";
      $run=mysqli_query($con,$sql);
      $row=mysqli_num_rows($run);
      if($row >0)
      {
          $data=mysqli_fetch_assoc($run);
          ?>
          <div class="col-lg-6 col-md-8 col-10 m-auto">
             <table class="table table-striped table-hover table-bordered">
                 
                     <tr>
                        <th colspan="3" style="background-color:black; color:white;">Students Details</th>
                     </tr>
                     <tr>
                        <td rowspan="5"><img src="dataimg/<?php echo $data['image']; ?>" width="500px" height="220px" class="img-fluid" /></td>
                        <th>Roll No.</th>
                        <td><?php echo $data['rollno']; ?></td>

                     </tr>
                     <tr>
                        <th>Name</th>
                        <td><?php echo $data['name']; ?></td>
                     </tr>
                     <tr>
                        <th>Standard</th>
                        <td><?php echo $data['std']; ?></td>
                     </tr>
                     <tr>
                        <th>City</th>
                        <td><?php echo $data['city']; ?></td>
                     </tr>
                     <tr>
                        <th>Parents No.</th>
                        <td><?php echo $data['pcon']; ?></td>
                     </tr>
                     
                 
             </table>
            </div>
          <?php
      }
      else{
          echo "<script>alert('No Students Found.')</script>";
      }
  }
?>