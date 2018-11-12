<?php 
//$dt="Select * from hostel ";
//$dept = mysqli_query($conn,$dt);
	//  while($det=mysqli_fetch_array($dept))
 //{
	//  $a[]= $det['code'];
//}
 //$a[0];
 //$a[1];
if(isset($_POST['edit']))
{
   //$adm =  $_POST['adm'];
  //$class=  $_SESSION['class'];
	//$hos = $_POST['hos'];
	$hos =  $_SESSION['hostel'];

  for($i=0; $i < count($_POST['hostel']); $i++){
   //if(!empty($_POST['subjId'][$i]) && !empty($_POST['score'][$i])){
      $room = $_POST['room'][$i];
      //$score = $_POST['score'][$i];
      $hostel = $_POST['hostel'][$i];
     // $h = 'YAN';
     // $exam = $_POST['exam'][$i];
     // $admn =  "2015_2016/005";
      
     mysqli_query($conn,"UPDATE room set $hos= '$room' where room_id = '$hostel'  ") or die(mysql_error()); 
       //mysql_query("UPDATE assessments set score= '$test' where subject_id = '$subj' and student_id = '$adm'") or die(mysql_error()); 


    //} 
   }
    $test_score=mysqli_query($conn,"SELECT  * from hostel");
    while($row=mysqli_fetch_assoc($test_score))
{
  $a = $row['code'];
//echo "<br>";
$sch_find=mysqli_query($conn,"SELECT SUM($a) from room  ");
    $find=mysqli_fetch_array($sch_find); 

     $b=$find[0];
    //echo "<br>";
mysqli_query($conn,"UPDATE hostel set total= '$b' where code = '$a'  ") or die(mysql_error()); 
}
   }
if(isset($_POST['change']))
{
   //$adm =  $_POST['adm'];
  //$class=  $_SESSION['class'];
  //$hos = $_POST['hos'];
  //$hos =  $_SESSION['hostel'];

  for($i=0; $i < count($_POST['sex']); $i++){
   //if(!empty($_POST['subjId'][$i]) && !empty($_POST['score'][$i])){
      $block_id = $_POST['block_id'][$i];
      //$score = $_POST['score'][$i];
      $sex = $_POST['sex'][$i];
      //$h = 'YAN';
     // $exam = $_POST['exam'][$i];
     // $admn =  "2015_2016/005";
      
     mysqli_query($conn,"UPDATE room_sex set sex= '$block_id' where room_id = '$sex'  ") or die(mysql_error()); 
       //mysql_query("UPDATE assessments set score= '$test' where subject_id = '$subj' and student_id = '$adm'") or die(mysql_error()); 


    //} 
   }
   }


if(isset($_POST['submit']))
{
 
  $_SESSION['hostel'] = $_POST['hostel'];

  $hos =  $_SESSION['hostel'];
  //$class=  $_POST['adm'];
  echo "<h2 style='color:#00FFCC'> $_SESSION[hostel]   HOSTEL</h2>";
  echo '<form method="post">';
  $_SESSION['hostel'] = $_POST['hostel'];

  $hos =  $_SESSION['hostel'];
  echo '<table class="table table-bordered">
	<Tr class="success">
		<th>Block</th>
		<th>Total</th>
		 
	</Tr>';
$rs=mysqli_query($conn,"SELECT * from room ");
    while($row=mysqli_fetch_array($rs)){

echo "<Tr>";
//echo "<td>".$i."</td>";
echo "<td>".$row['room_id']." </td>";
echo "<td><input type='text' class='form-control' name='room[]' value='".$row[$hos]." '></td>";
echo "<input type='hidden' class='form-control' name='hostel[]' value='".$row['room_id']." '>";
//echo "<td>".$row['WES']."</td>";
    // echo $row[$hostel]; 
 // echo "<input type='hidden' class='form-control' name='h[]' value='$hostel'>";
 //$_SESSION['hostel'] = $hostel;
      } 
    
      echo "</tr></table>";
      echo ' <br><input type="submit" class="btn btn-success" value="EDIT" name="edit"/></form>';        
  }
       else
        {
        echo '<form method="post"><select class="form-control" name="hostel">';
         $hostel="Select * from hostel ";
$hos = mysqli_query($conn,$hostel);
	  while($ht=mysqli_fetch_array($hos))
{
echo "<option value='".$ht[2]."' >$ht[1]</option>";

}
   echo '</select><br><input type="submit" class="btn btn-success" value="SUBMIT" name="submit"/></form>';      
        }   

$q=mysqli_query($conn,"SELECT *  from room_sex ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Block  in Database</h2>";
}
else
{
?>
 
<h2 style="color:#00FFCC">Edit Sex For Each Block: F or M</h2>
<form method="post">
<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Block</th>
		<th>Sex</th>
	</Tr>
		<?php 
 //$dt ="Select * from hostel";
//$dept = mysqli_query($conn,$dt);
	  //while($det=mysqli_fetch_array($dept))

$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['room_id']."</td>";
echo "<td><input type='text' class='form-control'value='".$row['sex']." ' name='block_id[]'></td>";
echo "<input type='hidden' class='form-control' name='sex[]' value='".$row['room_id']." '>";
//echo "<td>".$row['WES']."</td>";
//echo "<td>".$row['block']."</td>";
 

 

echo "</Tr>";
$i++;
}
		 
		
echo "</table>";
echo ' <br><input type="submit" class="btn btn-success" value="CHANGE" name="change"/></form>'; 
 }
 ?>