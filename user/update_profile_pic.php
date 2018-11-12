<?php 
$user= $_SESSION['user'];
extract($_POST);
if(isset($update))
{
	//if ( $user == '14-25PJ02') {
$sql=mysqli_query($conn,"select * from student where matric_no='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql); 
if (empty($res['image'])) {
  
$imageName=$_FILES['img']['name'];
//echo $img; 

$query="update student set image='$imageName' where matric_no='".$_SESSION['user']."'";
mysqli_query($conn,$query);

mkdir("../admin/images/$user");
move_uploaded_file($_FILES['img']['tmp_name'],"../admin/images/$user/".$_FILES['img']['name']);

$err="<font color='blue'>Profie Pic updated successfully !!</font>";
//}
}
else
{

	$err="<font color='blue'>Picture already in folder</font>";

}
 

}


//select old data
//check user alereay exists or not


?>
<h2 align="center">Update Your Image Just once</h2>

		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Choose Your pic</td>
					<Td><input class="form-control" type="file" name="img" required/></td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Update My Profile Pic" name="update"/>
				
					</td>
				</tr>
			</table>
		</form>
	