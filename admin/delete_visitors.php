<?php 
include('../connection.php');
$nid=$_GET['id'];

$save=mysqli_query($conn,"select * from visitors where notice_id='$nid'  ");
$r=mysqli_fetch_array($save);

$user = $r['user'];
$name = $r['name'];
$ht = $r['hostel'];
$block = $r['block'];
$mob = $r['mob'];
$addr = $r['addr'];
$rela = $r['rela'];
$sex = $r['sex'];
$visit_date = $r['visit_date'];
$time = $r['time'];
$Date = $r['Date'];
 


mysqli_query($conn,"insert into visitors_all values('','$user','$name','$ht','$block','$mob','$addr','$rela','$sex','$visit_date','$time','$Date',now())");


$q=mysqli_query($conn,"delete from visitors where notice_id='$nid'");

header('location:index.php?page=visitors');

?>