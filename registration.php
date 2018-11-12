<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from student where matric_no='$mat'");

$r=mysqli_num_rows($sql);

$matric=mysqli_query($conn,"select * from student_matric where matric_no='$mat'");

$matric_no=mysqli_num_rows($matric);

if($r==true)
{
$err= "<font color='red'>This user already exists  Continue<a href='com.php'> Here</a> </font>";
}
elseif ($matric_no == false) {
	$err= "<font color='red'>Sorry you are not allowed on this platform or Contact Admin</font>";
}
else
{
 


//encrypt your password
//$pass=md5($p);

$name = strtoupper($name);
$query="insert into student(matric_no,name,dept,mobile,hostel,sex) values('$mat','$name','$dept','$mob','$hostel','$sex')";
mysqli_query($conn,$query);


$_SESSION['user'] = $mat;



$err="<font color='blue'>Registration successfull !!</font>";
header('location:index.php?option=complete');

}
}




?>
<h2>Registration Form</h2>
<?php    
 //for ($i=1; $i < 5; $i++) { 

	
//echo $sum;
?>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your Matric No</td>
					<Td><input  type="text"  class="form-control" name="mat" placeholder="ND-11-COM-FT-461" required/></td>
				</tr>
				<tr>
					<td>Enter Your SurName </td>
					<Td><input type="text"  class="form-control" name="name" placeholder="Surname" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Department </td>
					<Td><select class="form-control" name="dept"> <?php


$dt="Select * from dept ";
$dept = mysqli_query($conn,$dt);
	  while($det=mysqli_fetch_array($dept))
{
echo "<option value='".$det[0]."' >$det[1]</option>";

}
?></select></td>
				</tr>
				
				<tr>
					<td>Hostel </td>
					<Td><select class="form-control" name="hostel"> <?php

$hostel="SELECT * from hostel where total >0 ";
$hos = mysqli_query($conn,$hostel);
	  while($ht=mysqli_fetch_array($hos))
{
	
echo "<option value='".$ht[2]."' >$ht[1]</option>";

}
?></select></td>
				</tr>
				
				 
				
				<tr>
					<td>Sex</td>
					<Td><select name="sex"><option value="M">M</option><option value="F">F</option></select></td>
				</tr> 
					 
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="SUBMIT" name="save"/>
 
				
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>