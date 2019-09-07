<?php
session_start();

$Email = $_POST['email'];
$Password = $_POST['pass'];


$con = mysqli_connect('localhost','root','','demo6');

$query = "SELECT * FROM `adminlogin`  WHERE email = '$Email' && password  = '$Password'";

$run= mysqli_query($con,$query);
$total = mysqli_num_rows($run);

if($total==1)
{
	$_SESSION['username']=$userid;
	header('location:data.php');
}else
{
	echo"please try again";
}
?>
