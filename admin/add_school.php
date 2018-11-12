<?php 
extract($_POST);
if(isset($add))
{

	if($sch=="")
	{
	$err="<font color='red'>Pls input a school name</font>";	
	}
	else
	{
		//$school = explode(",", $sch);
		$hostel =strtoupper($sch);
		//$ht = explode(",", $hostel);

//$stmt = "INSERT INTO t1 (student_id) VALUES ('" . implode("'), ('", $wordArray) . "')";
//mysql_query($stmt); 
mysqli_query($conn,"INSERT into hostel(hostel_name,code) values('$sch','$hostel') ");

  $sql = "ALTER TABLE `room` ADD `$hostel` INT(250)NOT NULL";
 		//$sql = "ALTER TABLE t1 ADD '$total' INT(250) NOT NULL, ADD '$fees' DOUBLE NOT NULL, ADD '$t' INT(1) NOT NULL, ADD '$new_year' YEAR NOT NULL";
 		mysqli_query($conn,$sql);

	 
		
		$err="<font color='green'> Hostel added  successfully</font>";	
	}
}

?>
<h2>Input the name of the hostel one by one </h2>
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
		<div class="col-sm-4">Enter school names</div>
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
		<input type="submit" value="Add Hostel " name="add" class="btn btn-success"/></center>
		 
		</div>
	</div>
</form>	