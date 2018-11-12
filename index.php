<?php 
include('connection.php');
session_start();

 ?>
<html>
	<head>
		<title>Hostel Management</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong> Hostel Management</strong></a></li>
      
	  
	  <li><a href="index.php?option=complete"><span class="glyphicon glyphicon-user"></span> Complete</a></li>
   
   
	
	<li><a href="#"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/url.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/banner_01.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <img src="images/highlightnews.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>
<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="complete")
			{
			include('com.php');
			}
			else if($opt=="contact")
			{
			include('contact1.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			else if($opt=="forget")
			{
			include('for.php');
			}
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h2></h2>
		
		Welcome to Hostel Management System. This is a platform that does not give room for prefential treatment i hostel allocation";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading">Instruction</div>
  <div class="panel-body">
  If you have any problem during your registration click <a href="index.php?option=complete">here</a> or click on complete <br><br>
  After Registration , you can login with your Matric number as your username and your Surname as your password 
  </div>
</div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href=" "> Developed by  ILIAS M.D</a></li>
      
	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>