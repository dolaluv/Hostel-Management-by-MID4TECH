<?php 
//$dt="Select * from hostel ";
//$dept = mysqli_query($conn,$dt);
	//  while($det=mysqli_fetch_array($dept))
 //{
	//  $a[]= $det['code'];
//}
 //$a[0];
 //$a[1];
 


if(isset($_POST['submit']))
{
 
 // $_SESSION['hostel'] = $_POST['h'];

 // $hos =  $_SESSION['hostel'];
  $matric_no=  $_POST['matric_no'];
 // echo '<h2 style="color:#00FFCC">Student in Block '.$block.'</h2>';
  //echo '<form method="post">';
   
 

$res=mysqli_query($conn,"SELECT * from student where matric_no= '$matric_no'   ");
    $row=mysqli_fetch_array($res);
//$row['hostel'];
    $sq=mysqli_query($conn,"select * from dept where id='".$row['dept']."'");
$rs=mysqli_fetch_assoc($sq);

 $hostel_name=" SELECT * from hostel where code='$row[hostel]'  ";
$h_name = mysqli_query($conn,$hostel_name);
     $ht=mysqli_fetch_array($h_name);
     echo '<h2 align="center"> Profile</h2><table class="table table-bordered">';
     ?>
     <center><img   src="images/<?php echo $row['matric_no'];?>/<?php echo $row['image'];?>" width="150" height="100" alt="not found"/></center>
     <?php


  
 echo '       
        <tr>
          <td>Matric_no</td>
          <Td>'.$row['matric_no'].'</td>
        </tr>
        <tr>
          <td>SurName</td>
          <Td>'.$row['name'].'</td>
        </tr>
        <tr>
        <td>OtherName</td>
          <Td>'.$row['other'].'</td>
        </tr>
        <tr>
          <td>Department</td>
          <Td>'.$rs['Dept'].'</td>
        </tr>
        <tr>
          <td>Hostel</td>
          <Td>'.$ht['hostel_name'].'</td>
        </tr>
        <tr>
          <td>Block</td>
          <Td>'.$row['block'].'</td>
        </tr>
        <tr>
          <td>Room</td>
          <Td>'.$row['room'].'</td>
        </tr>
        
        <tr>
          <td>Sex</td>
          <Td>'.$row['sex'].'</td>
        </tr>
        <tr>
          <td>DOB</td>
          <Td>'.$row['dob'].'</td>
        </tr>
        <tr>
          <td>Email</td>
          <Td>'.$row['email'].'</td>
        </tr>
        <tr>
          <td>Address</td>
          <Td>'.$row['addr'].'</td>
        </tr>
        <tr>
          <td>Address</td>
          <Td>'.$row['email'].'</td>
        </tr>
        <tr>
          <td>Email Address</td>
          <Td>'.$row['addr'].'</td>
        </tr>

        ';

    // echo $row[$hostel]; 
 // echo "<input type='hidden' class='form-control' name='h[]' value='$hostel'>";
 //$_SESSION['hostel'] = $hostel;
 
      echo "</tr></table>";
      echo ' <br> </form>';        
  }
       else
        {
        echo '<form method="post">';
      echo '<h2>Enter Matric Number</h2><input type="text" class="form-control" name="matric_no"/>';  
 
   echo ' <br><input type="submit" class="btn btn-success" value="SEARCH" name="submit"/></form>';      
        }   

 ?>