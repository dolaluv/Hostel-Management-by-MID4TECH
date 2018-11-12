
<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete all record ?"))
		{
		window.location.href="delete_all_com.php?id="+id;
		}
	}
</script>
<?php 


$q=mysqli_query($conn,"select * from solved  ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Complain</h2>";
}
else
{
?>
<h2>Solved Complains</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Matric No</th>
		<th>Hostel</th>
		<th>Block</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
		<th>Solved Dated</th>
		 
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['user']."</td>";
echo "<td>".$row['hostel']."</td>";
echo "<td>".$row['block']."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td><textarea name='dept' class='form-control' >".$row['Description']."</textarea></td>";
echo "<td>".$row['Date']."</td>";
echo "<td>".$row['d_date']."</td>";

?>

<?php
echo "</Tr>";
$i++;
}
		?>
		
</table><h1><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></h1>
<?php }?>