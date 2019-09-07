<?php

		$id = $_GET['id'];
		$type = $_POST['type'];
		$category = $_POST['category'];
		$Ptype = $_POST['Ptype'];
		$Street = $_POST['street'];
		$City = $_POST['city'];
		$Locality = $_POST['locality'];
		$Building = $_POST['building'];
		$Ttype = $_POST['Ttype'];
		$Cstatus = $_POST['Cstatus'];
		$Bedroom = $_POST['bedroom'];
		$Bathroom = $_POST['bathroom'];
		$Ftype = $_POST['Ftype'];
		$Builtup = $_POST['builtup'];
		$Age = $_POST['age'];
		$Cost = $_POST['cost'];
		$Maintenence = $_POST['maintenence'];
        $Name = $_FILES['img']['tmp_name'];
		$image = $_FILES['img']['name'];
		$folder = "images/".$image;

		//unlink("images/$folder");
		move_uploaded_file($Name,"images/$image ");

$con = mysqli_connect('localhost','root','','demo6');

$query = "UPDATE `propertydetails` SET `type`='$type',`category`='$category',`protype`='$Ptype',
`street`='$Street',`city`='$City',`locality`='$Locality ',`building`='$Building',
`transation`='$Ttype',`status`='$Cstatus',`bedroom`='$Bedroom',`bathroom`='$Bathroom',`furnish`='$Ftype',
`builtup`='$Builtup',`age`='$Age ',`cost`='$Cost',`maintenence`='$Maintenence',`image`='$folder' WHERE id='$id'";





$run= mysqli_query($con,$query);

if($run==1)
{
	header("Location:propertydetails.php");
}	
else
{
	echo"something went wrong!";
}
?>