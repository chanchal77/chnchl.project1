<?php
$id= $_GET['id'];

$approval = $_POST['app'];

$con = mysqli_connect('localhost','root','','demo6');

$query = "INSERT INTO `alerts`( '','approval`,'id') VALUES ('','$approval','$id') ";



$run= mysqli_query($con,$query);

if($run==1)
{
	
	header("Location:myprofile.php");
}	
else
{
	echo"something went wrong!";
}
?>