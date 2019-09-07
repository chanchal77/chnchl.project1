<?php

$Name = $_POST['name'];
$No = $_POST['no'];
$Category = $_POST['category'];
$Pro_ID = $_POST['Pro_id'];
$Rsn = $_POST['rsn'];
$Msg = $_POST['msg'];


$con = mysqli_connect('localhost','root','','demo6');

$query = "INSERT INTO `feedback`( `name`, `Mobile`, `category`, `Pro_id`, `reason`, `msg`) VALUES
 ('$Name','$No','$Category','$Pro_ID','$Rsn','$Msg')";

$run= mysqli_query($con,$query);

if($run==True)
{
	header('location:favorite_properties.php');
}else
{
	echo"Error!";
}
?>

