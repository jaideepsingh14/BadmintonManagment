<?php
include_once "connection.php";
if(isset($_POST))
{
$match_id=$_POST['mid'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$venue=$_POST['venue'];
$time=$_POST['time'];
$date=$_POST['date'];

$sql="insert into schedule(match_id,p1,p2,venue,time,date) values ($match_id,$p1,$p2,'$venue', '$time','$date');";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "Success";

}
else{
	echo "False";
}
}
?>
