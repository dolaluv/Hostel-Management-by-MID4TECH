<?php 
extract($_POST);
if(isset($add))
{

	if($dept=="")
	{
	$err="<font color='red'>Pls input department</font>";	
	}
	else
	{
		$Dept = explode(",", $dept);

//$stmt = "INSERT INTO t1 (student_id) VALUES ('" . implode("'), ('", $wordArray) . "')";
//mysql_query($stmt); 
mysqli_query($conn,"INSERT into dept(Dept) values('" . implode("'), ('", $Dept) . "')");
	 
		
		$err="<font color='green'> department added  successfully</font>";	
	}
}

?>
<h2>Input department seperated with comma</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	 
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Enter department</div>
		<div class="col-sm-6">
		<textarea name="dept" class="form-control" ></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	 
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
			<center>
		<input type="submit" value="Add  department" name="add" class="btn btn-success"/></center>
		 
		</div>
	</div>
</form>	