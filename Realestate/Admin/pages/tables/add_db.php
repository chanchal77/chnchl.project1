<?php

		$type = $_POST['type'];
		$category = $_POST['category'];
		$NameBy = $_POST['nameby'];
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
		//$img = $_POST['img'];


		move_uploaded_file($Name,"images/$image");
        
		
		$con = mysqli_connect('localhost','root','','demo6');


		$query = "INSERT INTO `propertydetails`(`id`, `type`, `category`,`nameby`, `protype`, `street`, `city`, `locality`, `building`, `transation`, 
		`status`, `bedroom`, `bathroom`, `furnish`, `builtup`, `age`, `cost`, `maintenence`, `image`) VALUES 
		('','$type','$category','$NameBy','$Ptype','$Street','$City','$Locality ','$Building','$Ttype',
		'$Cstatus','$Bedroom','$Bathroom','$Ftype','$Builtup','$Age','$Cost',
		'$Maintenence','$folder ')";

		$result = mysqli_query($con, $query);

		if($result==1)
		{       

			header("location:propertydetails.php");
				
		 }else 
		 {       
			echo "Insertion Failed";

		}
		
		/*image display
		
		$sql = "SELECT * FROM `propertydetails`";
		
		if($row = mysql_fetch_assoc($sql))
		{
			echo'<img scr="data:image/jpeg;64,'.base64_encode($row['image']).'" width="150" height="150">';
		}
	*/
?>