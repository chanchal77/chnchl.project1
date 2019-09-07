<?php
$username= $_GET['username'];
$Name = $_POST['name'];
$No = $_POST['no'];
$Email = $_POST['email'];
$Msg = $_POST['msg'];
$city = $_POST['city'];
$dt1= date("Y-m-d");

$con = mysqli_connect('localhost','root','','demo6');

$query = "INSERT INTO `contact`(`id`, `FullName`, `Number`, `Email`, `Msg`, `contactto`, `city`, `date`) VALUES 
('','$Name','$No','$Email','$Msg','$username','$city','$dt1')";

$run= mysqli_query($con,$query);

if($run==True)
{
	header('location:index.php');
}else
{
	echo"Error!";
}
?>

