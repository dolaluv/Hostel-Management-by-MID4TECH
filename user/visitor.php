<?php
$user= $_SESSION['user']; 
$_SESSION['block'] = $users['block'];
$block = $_SESSION['block'];
$_SESSION['hostel'] = $h['hostel_name'];
$ht = $_SESSION['hostel'];
extract($_POST);
if(isset($add))
{

	//if($details=="" || $sub==""  )
	//{
	//$err="<font color='red'>fill all the fileds first</font>";	
	//}
	//else
	//{
		//foreach($user as $v)
		//{
mysqli_query($conn,"insert into visitors values('','$user','$name','$ht','$block','$mob','$addr','$rela','$gen','$date_v','$time',now())");
		//}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	//}
}

?>
<h2 align="center">Register A Visitor</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Visitor's name</td>
					<Td><input class="form-control"    type="text" name="name"/></td>
				</tr>
				
				<tr>
					<td> Visitor's name Mobile </td>
					<Td><input class="form-control" type="tel" name="mob"/></td>
				</tr>
				<tr>
					<td> Visitor's address</td>
					<Td><input class="form-control" type="text" name="addr"/></td>
				</tr>
				<tr>
					<td> Visitor's  Relaionship </td>
					<Td><input class="form-control" type="text" name="rela"/></td>
				</tr>
				<tr>
					<td> Visiting time </td>
					<Td><input class="form-control" type="time" name="time"/></td>
				</tr>
				<tr>
					<td> Visiting date </td>
					<Td><input class="form-control" type="date" name="date_v"/></td>
				</tr>

				<tr>
					<td>Visitor's  Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="M"/>
				Female<input type="radio" name="gen" value="F"/>	
					</td>
				</tr>
				<tr>
					 </tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Update My Profile" name="add"/>
<input type="reset" class="btn btn-default" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>