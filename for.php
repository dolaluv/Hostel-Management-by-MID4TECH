<?php
require('connection.php');
 
if(isset($_POST['search']))
{
 
$_SESSION['matric_no']= $_POST['for'];
$sql=mysqli_query($conn,"SELECT *  from student  where matric_no='$_SESSION[matric_no]'   ");

$r=mysqli_fetch_array($sql);
if ($r) {
	$err = "<font color='red'>Your password has been sent to $r[email] </font>";
}
else
{
$err = "<font color='red'>Matric Number does not exist</font>";
}
 

 }
?>

<h2>Forget Password</h2>
<form method="post"  enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your Matric No</td>
					<Td><input  type="text"  class="form-control" name="for" required/></td>
				</tr>
				 
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="SUBMIT" name="search"/>
 
				
					</td>
				</tr>
			</table>
		</form>