<?php
session_start();

$userid = $_POST['user'];
$password = $_POST['pass'];


$con = mysqli_connect('localhost','root','','demo6');


	$query = "SELECT * FROM registration WHERE username = '$userid' && password = '$password'";
			
	

	$run= mysqli_query($con,$query);
	

	if($run==1)
	{
		$_SESSION['username']=$userid;
		header('location:profile.php');
	}else
	{
		echo"your account is under waiting ";
	}


?>
