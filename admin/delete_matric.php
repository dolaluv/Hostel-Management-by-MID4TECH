<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from student_matric where id='$nid'");

header('location:index.php?page=matric');

?>