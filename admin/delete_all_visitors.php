<?php 
include('../connection.php');
//$nid=$_GET['id'];

 


    $q=mysqli_query($conn,"TRUNCATE solved  ");  

header('location:index.php?page=all_com');

?>