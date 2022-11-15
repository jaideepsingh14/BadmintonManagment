<?php
include_once "connection.php";
if(isset($_POST))
{
$match_id=$_POST['match_id'];
$win=$_POST['win'];
$loss=$_POST['loss'];

$sql="insert into match_update(match_id,win,loss) values ($match_id,$win,$loss);";
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
