<?php 
$q=mysqli_query($conn,"select * from student ");
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
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>
<h2 style="color:#00FFCC">All Student</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Matric No</th>
		<th>SurName</th>
		<th>FirstName</th>
		<th>Hostel</th>
		<th>Block</th>
		<th>Sex</th>
		<th>Email</th>
		<th>Image</th>
		
		<th>Delete</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['matric_no']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['other']."</td>";
echo "<td>".$row['hostel']."</td>";
echo "<td>".$row['block']."</td>";
echo "<td>".$row['sex']."</td>";
echo "<td>".$row['email']."</td>";
 
 ?>
 <td><img   src="images/<?php echo $row['matric_no'];?>/<?php echo $row['image'];?>" width="150" height="80" alt="not found"/></td>
 <Td><a href="javascript:DeleteNotice('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>
 
 <?php

echo "</Tr>";
$i++;
}
		 
		
echo "</table>";
 }?>