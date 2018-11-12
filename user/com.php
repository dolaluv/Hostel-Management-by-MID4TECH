<?php
$user= $_SESSION['user']; 
$_SESSION['block'] = $users['block'];
$block = $_SESSION['block'];
$_SESSION['hostel'] = $h['hostel_name'];
$ht = $_SESSION['hostel'];
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub==""  )
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		//foreach($user as $v)
		//{
mysqli_query($conn,"insert into complain values('','$user','$ht','$block','$sub','$details',now())");
		//}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
}

?>
<h2>Make a Complain</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
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
		<input type="submit" value="Complain" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	