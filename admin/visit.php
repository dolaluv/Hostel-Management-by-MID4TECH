
<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_visitors.php?id="+id;
		}
	}
</script>
<?php 


$q=mysqli_query($conn,"select * from visitors  ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Visitors</h2>";
}
else
{
?>
<h2>All Visitors</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Matric No</th>
		<th>Visitors</th>
		<th>Sex</th>
		<th>Hostel</th>
		<th>Block</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Relationship</th>
		<th>Visit date</th>
		<th>Date</th>
		<th>Done</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['user']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['sex']."</td>";
echo "<td>".$row['hostel']."</td>";
echo "<td>".$row['block']."</td>";
echo "<td>".$row['mob']."</td>";
echo "<td><textarea name='dept' class='form-control' >".$row['addr']."</textarea></td>";
echo "<td>".$row['rela']."</td>";
echo "<td>".$row['visit_date']."<br>". $row['time']." </td>";
//echo "<td>".$row['Date']."</td>";

echo "<td>".$row['Date']."</td>";
?>
<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>
<?php
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>