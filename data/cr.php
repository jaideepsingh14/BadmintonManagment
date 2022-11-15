<?php
include_once "connection.php";
if(isset($_POST['submit1']))
{
$pid=$_POST['pid'];
$sin=$_POST['sin'];
$dob=$_POST['dob'];
$mixdob=$_POST['mixdob'];


$sql="insert into player_ranking(pid,sin,dob,mixdob) values ('$pid','$sin','$dob','$mixdob');";
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
