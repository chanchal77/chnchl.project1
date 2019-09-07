<?php
		
		
		
		
        $Name = $_FILES['image']['tmp_name'];
		$img = $_FILES['image']['name'];
		$folder = "image/".$img;
		

		
		move_uploaded_file($Name,$folder);
        
		
		$con = mysqli_connect('localhost','root','','demo6');


	
	$query = "UPDATE `registration` SET `image`='$folder' WHERE username='$UName'";

	$run= mysqli_query($con,$query);

	if($run==1)
	{
		echo $folder.$img.$Name;
	}else
	{
		echo"Error!";
	}

?>