<?php 
extract($_POST);
if(isset($add))
{

	if($sch=="")
	{
	$err="<font color='red'> Input matric no</font>";	
	}
	else
	{
		$school = explode(",", $sch);

//$stmt = "INSERT INTO t1 (student_id) VALUES ('" . implode("'), ('", $wordArray) . "')";
//mysql_query($stmt); 
mysqli_query($conn,"INSERT into  student_matric(matric_no) values('" . implode("'), ('", $school) . "')");
	 
		
		$err="<font color='green'> Matric no  added  successfully</font>";	
	}
}

?>
<h2>Input matric no seperated with comma</h2>
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
		<div class="col-sm-4">Enter matric </div>
		<div class="col-sm-6">
		<textarea name="sch" class="form-control" ></textarea></div>
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
		<input type="submit" value="Add Matric Number" name="add" class="btn btn-success"/></center>
		 
		</div>
	</div>
</form>	