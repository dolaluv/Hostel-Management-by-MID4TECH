<?php
		session_start();
	  include('connection.php');
	
	 
	 //$dt="Select * from school ";
//$dept = mysqli_query($conn,$dt);
	//  while($det=mysqli_fetch_array($dept))

 	$room = $_POST['room'];
 	$hostel= $_POST['hostel'];
 
	 //$query = mysql_query(" select * from student where user='uname' and pass='$pword' ")or die(mysql_error());
	 $test_score=mysqli_query($conn,"SELECT  COUNT(hostel) from student where hostel='$hostel' AND block='$room' ");
    $test=mysqli_fetch_array($test_score); 
      $a = $test[0];

    $sch_find=mysqli_query($conn,"SELECT * from room where room_id='$room'  ");
    $find=mysqli_fetch_array($sch_find); 

     $b=$find[$hostel];

     
	 
    if($a==$b ){
    	//$uname = "admin@gmail.com";
    	echo "Block filled up";
		
	}
else {  
//for ($i=0; $i < 5; $i++) { 
	 
//}

	 $sch_find=mysqli_query($conn,"SELECT  COUNT(block) from student where block ='$room'  ");
    $find=mysqli_fetch_array($sch_find); 
     $room_num= $find[0] + 1;

mysqli_query($conn,"UPDATE  student set block = '$room', room = ' $room_num'  where matric_no ='".$_SESSION['matric_no']. "' ");

mysqli_query($conn,"UPDATE  student_matric set pass = '$_SESSION[name]' where matric_no ='".$_SESSION['matric_no']. "' ");
//$quer="insert into student_matric(pass) values( '$_SESSION[name]')";
//mysqli_query($conn,$quer);

}
	//elseif ($a==$b) {
	//	echo"School filled up";
	//}

//else{
	//mysql_query("UPDATE exam set score_exam= '$exam' where subject_id = '$subj' and student_id = '$adm'")
	//mysqli_query($conn,"UPDATE  student set sch = '$sch' where matric_no ='".$_SESSION['matric_no']. "' ");
    //$find_dept=mysqli_fetch_array($choose); 
    // $c = $find_dept[0];

//}
	//header('location:index.php');



?>