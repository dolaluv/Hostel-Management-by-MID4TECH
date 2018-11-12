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
      $h = 'YAN';
     // $exam = $_POST['exam'][$i];
     // $admn =  "2015_2016/005";
      
     mysqli_query($conn,"UPDATE room set $hos= '$room' where room_id = '$hostel'  ") or die(mysql_error()); 
       //mysql_query("UPDATE assessments set score= '$test' where subject_id = '$subj' and student_id = '$adm'") or die(mysql_error()); 


    //} 
   }
   }


if(isset($_POST['submit']))
{
 
  $_SESSION['hostel'] = $_POST['hostel'];

  $hos =  $_SESSION['hostel'];
  $block=  $_POST['block'];
  echo '<h2 style="color:#00FFCC">Student in Block '.$block.'</h2>';
  echo '<form method="post">';
  $_SESSION['hostel'] = $_POST['hostel'];

  $hos =  $_SESSION['hostel'];
  echo '<table class="table table-bordered">
  <Tr class="success">
    <th>Sr.No</th>
    <th>Matric No</th>
    <th>Name</th>
    <th>Hostel</th>
    <th>Block</th>
     
  </Tr>';
  $hostel_name=" SELECT * from hostel where code='$hos'  ";
$h_name = mysqli_query($conn,$hostel_name);
     $ht=mysqli_fetch_array($h_name);

$rs=mysqli_query($conn,"SELECT * from student where hostel= '$hos' AND block='$block' ");
$i=1;
    while($row=mysqli_fetch_array($rs)){

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['matric_no']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$ht['hostel_name']."</td>";
echo "<td>".$row['block']."</td>";
//echo "<td>".$row['WES']."</td>";
    // echo $row[$hostel]; 
 // echo "<input type='hidden' class='form-control' name='h[]' value='$hostel'>";
 //$_SESSION['hostel'] = $hostel;
$i++;
      } 
    
      echo "</tr></table>";
      echo ' <br> </form>';        
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
   echo '</select><br>
   <select class="form-control" name="block">';
         $hostel="Select * from room ";
$hos = mysqli_query($conn,$hostel);
    while($ht=mysqli_fetch_array($hos))
{
echo "<option value='".$ht[1]."' >$ht[1]</option>";

}
   echo ' <br><input type="submit" class="btn btn-success" value="SUBMIT" name="submit"/></form>';      
        }   

 ?>