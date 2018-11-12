<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $pass=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
//$pass=md5($p);	

$sql=mysqli_query($conn,"select * from student_matric where matric_no='$e' and pass='$pass'");

$r=mysqli_fetch_array($sql);

if($r['matric_no']==$e && $r['pass']==$pass)
{
$_SESSION['user']=$e;
header('location:user');
}
elseif ($r['matric_no']!==$e && $r['name']!==$pass) {
$sq=mysqli_query($conn,"select * from admin where user='$e' and pass='$pass'");

$p=mysqli_fetch_array($sq);
if($p['user']==$e && $p['pass']==$pass)
{
$_SESSION['admin']=$e;
header('location:admin');
}
else
{

$err="<font color='red'>Invalid login details</font>";

}
}

else
{

$err="<font color='red'>Invalid login details</font>";

}

}
}

?>
<h2>Login Form</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter your Matric no</div>
		<div class="col-sm-5">
		<input type="text" name="e" class="form-control"/></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Enter YOur Password</div>
		<div class="col-sm-5">
		<input type="password" name="pass" class="form-control" placeholder="Your surname in UPPERCASE" /></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-success"/>&nbsp;&nbsp; &nbsp;&nbsp; 
		<a href="index.php?option=forget"><input type="button" value="Forget Password" name="forget" class="btn btn-danger"/></a> 

		</div>
	</div>
</form>	