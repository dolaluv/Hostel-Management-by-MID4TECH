<?php 
//session_start();
require('connection.php');
//extract($_POST);
if(isset($save))
{
//check user alereay exists or not
echo $_SESSION['user']; 
$sql=mysqli_query($conn,"SELECT student.hostel,student.sex,dept.id, dept.Dept,student.dept,student.name,student.matric_no, student.mobile  from student,dept where matric_no='$_SESSION[user]' AND dept.id = student.dept ");
$r=mysqli_fetch_array($sql);

$r['Dept'];
$_SESSION['matric_no']= $r['matric_no'];
$_SESSION['name']= $r['name'];
}
elseif (isset($_POST['search'])) {


 $_SESSION['user'] = $_POST['mat'];

$sq=mysqli_query($conn,"SELECT  * from student where matric_no='$_SESSION[user]' AND  block = '' AND room = ''  ");
$rw=mysqli_fetch_array($sq);
if ($rw) {
	$sql=mysqli_query($conn,"SELECT student.hostel,student.sex,dept.id, dept.Dept,student.dept,student.name,student.matric_no, student.mobile  from student,dept where matric_no='$_SESSION[user]' AND dept.id = student.dept ");
$r=mysqli_fetch_array($sql);
 $r['Dept'];
$_SESSION['matric_no']= $r['matric_no'];
$_SESSION['name']= $r['name'];

}
else {

	  
	 
	  header('location:index.php?option=login');


}

	# code...
}
 



?>
<h2>SELECT A BLOCK</h2>

		<form method="post" enctype="multipart/form-data" id='logForm'>
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Matric No</td>
					<Td><?php echo  $_SESSION['matric_no']; ?> </td>
				</tr>
				<tr>
					<td>Name </td>
					<Td><?php echo $_SESSION['name'];  ?> </td>
				</tr>
				
				 
				
				 
				<tr>
					<td> Department </td>
					<Td><?php echo $r['Dept']  ?></td>
				</tr>
				<tr>
					<td> Hostel </td>
					<Td><?php echo $r['hostel']  ?></td>
				</tr>
				<input type="hidden" name="hostel" value=<?php echo $r['hostel'];  ?> >
				<tr>
					<?php   $hos = $r['hostel']; 

					 $sex = $r['sex'];     

					?>
					<td>Select a Block </td>
					<Td><select class="form-control" name="room" id="room" required> 

		 <?php

		 

//$count=mysqli_query($conn,"SELECT  COUNT(sch) from student,school where student.sch=school.code ");
    //$test=mysqli_fetch_array($count); 
    //echo $test[0];

//SELECT hostel.room_id,room_sex.room_id from hostel,room_sex where hostel.room_id = room_sex.room_id AND sex="F"
$dt="SELECT room.room_id,room_sex.room_id from room,room_sex where room.room_id = room_sex.room_id AND sex='$sex' AND $hos > 0 ";
$dept = mysqli_query($conn,$dt);
	  while($det=mysqli_fetch_array($dept))
{
echo "<option value='".$det['room_id']."' >BLOCK $det[room_id]</option>";

}


?></select> </td>
				</tr>

				
		 
				 
					 
				
				<tr>
					
					
<Td colspan="2" align="center">
 
<input type="button" class="btn btn-success" value="SUBMIT" id="log" name="login"/>
 
				
					</td>
				</tr>
			</table>
		</form>
		<script type="text/javascript">
	$(document).ready(function(){
		$('#log').click(function(){
			//var uname = $('#uname').val();
			//var pword = $('#pword').val();
			var sch= $('#sch').val();
			 
	
		if( sch != ''  ){
			$.ajax({
				url:'sch_select.php',
				type:'post',
				data:$('#logForm').serialize(),
				success:function(data){
					if(!data){
						alert('Successful. Login with your Matric and Surname ');
						window.location = "index.php?option=login";
						}else{
						alert(data);
					}
				}
			});
		}else{
			alert('Please fill out all the necessary information!');
		}
		});
	});
	</script>
	</body>
</html>