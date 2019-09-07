<?php

$approval = $_POST['app'];



$con = mysqli_connect('localhost','root','','demo6');

$query = "INSERT INTO `alerts`( `approval`) VALUES ('$approval') ";



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