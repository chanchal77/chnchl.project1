
<?php
error_reporting(0);

$UName = $_POST['username'];
$mail = $_POST['email'];
$Pass = $_POST['password'];
$Mob = $_POST['mob'];
$Category = $_POST['cat'];
$Name = $_FILES['image']['tmp_name'];
$img = $_FILES['image']['name'];
$folder = "images/".$img;
$filetype = $_FILES['image']['type'];
$dt1= date("Y-m-d");

move_uploaded_file($Name,$folder);
	
$con = mysqli_connect('localhost','root','','demo6');
$result = $con->query($query);

if ($filetype=="image/gif" OR $filetype=="image/GIF"OR $filetype=="image/png" OR $filetype=="image/PNG" OR
$filetype=="image/JPEG" OR $filetype=="image/jpeg" AND $folder != "" AND $mail =="" AND $Pass="" AND $UName=""
 AND $Category =="")
{
	
	$chnchl = "Select * from `registration` where username = '$UName'";
	if($result->mysql_num_rows >= 0) 
	{
		echo "Username already exist, try something else.";
	}
	else
	{
		$query = "INSERT INTO `registration`(`id`, `username`, `email`, `password`, `conpass`, `category`, `regi_image`, `date`) VALUES 
		 ('','$UName','$mail','$Pass','$Mob','$Category','$folder','$dt1')";
		 header('Location: login.html');
	}
	
}
else
{
	echo"All feilds are compulsory";
}
?>