<?php 
$q=mysqli_query($conn,"select * from student_matric ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_matric.php?id="+id;
		}
	}
</script>
<h2 style="color:#00FFCC">All Student</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Matric No</th>
		<th>Password</th>
		<th>Delete</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['matric_no']."</td>";
if($row['pass']=='')
echo "<td>0</td>";
else 
 echo "<td>1</td>";
 ?>
 <Td><a href="javascript:DeleteNotice('<?php echo $row['ID']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>
 <?php

echo "</Tr>";
$i++;
}
		 
		
echo "</table>";
 }?>