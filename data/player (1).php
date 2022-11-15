<?php
include_once "connection.php";
if(isset($_POST))
{
$pid=$_POST['pid'];
$tid=$_POST['pname'];
$name=$_POST['pcountry'];
$age=$_POST['age'];
$ranking=$_POST['gender'];

$sql="insert into player(pid,name,country,age,gender) values ('$pid','$tid','$name', $age,'$ranking');";
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
