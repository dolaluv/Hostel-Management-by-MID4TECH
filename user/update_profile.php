<?php 
extract($_POST);
if(isset($update))
{
//dob
  
  
$query="update student set addr='$addr', email='$email', mobile='$mobile', other='$name', dob='$dob' where matric_no='".$_SESSION['user']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);



$err="<font color='blue'>Profie updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from student where matric_no='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

$sq=mysqli_query($conn,"select * from dept where id='".$res['dept']."'");
$rs=mysqli_fetch_assoc($sq);

?>
<h2 align="center">Update Your Profile</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				<tr>
					<td>Matric No </td>
					<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['matric_no'];?>"  name="e"/></td>
				</tr>
				<tr>
					<td>Surname</td>
					<Td><input class="form-control" value="<?php echo $res['name'];?>"readonly="true"  type="text" name="n"/></td>
				</tr>
				<tr>
					<td>Firstname</td>
					<Td><input class="form-control" value="<?php echo $res['other'];?>"   type="text" name="name"/></td>
				</tr>
				
					<tr>
					<td> Dept </td>
					<Td><input class="form-control" type="text" readonly="true" value="<?php echo $rs['Dept'];?>"  name="mob"/></td>
				</tr>
				<tr>
					<td> Date of Birth </td>
					<Td><input class="form-control" type="date" value="<?php echo $res['dob'];?>"  name="dob"/></td>
				</tr>
				
				<tr>
					<td> Mobile </td>
					<Td><input class="form-control" type="text" value="<?php echo $res['mobile'];?>"  name="mobile"/></td>
				</tr>
				<tr>
					<td> Hostel </td>
					<Td><input class="form-control" type="text" readonly="true" value="<?php echo $res['hostel'];?>"  name="mob"/></td>
				</tr>

				<tr>
					<td> Block/Room </td>
					<Td><input class="form-control" type="text" readonly="true" value="<?php echo $res['block'];?>"  name="mob"/></td>
				</tr>
				
					<tr>
					<td> Address </td>
					<Td><input class="form-control" type="text"   value="<?php echo $res['addr'];?>"  name="addr"/></td>
				</tr>
				 <tr>
					<td>Email Address </td>
					<Td><input class="form-control" type="email"   value="<?php echo $res['email'];?>"  name="email"/></td>
				</tr>
				 
				<tr>
				 
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Update My Profile" name="update"/>
<input type="reset" class="btn btn-default" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	