<?php 
   include('../dbcon.php');
  
     $rollno= $_POST['rollno'];
     $name= $_POST['name'];
     $city= $_POST['city'];
     $pcon= $_POST['pcon'];
     $std= $_POST['std'];
     $id= $_POST['sid'];
     $img= $_FILES['simg'] ['name'];
     $tempname = $_FILES['simg'] ['tmp_name'];

     move_uploaded_file($tempname,"../dataimg/$img");

     $qry="UPDATE `student` SET `id`='$id',`rollno`='$rollno',`name`='$name',`city`='$city',`pcon`='$pcon',`std`='$std',`image`='$img' WHERE `id`='$id'";
     $run= mysqli_query($con, $qry); 

     if($run == true)
     {
         ?>
         <script>
            alert('Data Inserted successfully');
            window.open('updateform.php?sid=<?php echo $id ?>','_self');
         </script>
         <?php
     }



  
?>