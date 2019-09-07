<?php
error_reporting(0);

		
		$type = $_POST['type'];
		$category = $_POST['category'];
		$Nameby = $_POST['nameby'];
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
		//cover photo img
        $Name = $_FILES['img']['tmp_name'];
		$image = $_FILES['img']['name'];
		$folder = "images/".$image;
		// 1st img1
		 $Name = $_FILES['img1']['tmp_name'];
		$image = $_FILES['img1']['name'];
		$folder1 = "images/".$image;
		 // 2nd img2
		 $Name = $_FILES['img2']['tmp_name'];
		$image = $_FILES['img2']['name'];
		$folder2 = "images/".$image;
		// 3rd img3
		 $Name = $_FILES['img3']['tmp_name'];
		$image = $_FILES['img3']['name'];
		$folder3 = "images/".$image;
		move_uploaded_file($Name,"images/$image");
		// 4th img4
		 $Name = $_FILES['img4']['tmp_name'];
		$image = $_FILES['img4']['name'];
		$folder4 = "images/".$image;
		
		$dt1= date("Y-m-d");
        
		
		$con = mysqli_connect('localhost','root','','demo6');


		$query = "INSERT INTO `propertydetails`(`id`, `type`, `category`, `nameby`, `protype`, `street`, `city`, `locality`, `building`, `transation`, `status`, `bedroom`, `bathroom`, `furnish`, 
		`builtup`, `age`, `cost`, `maintenence`, `image`, `image1`, `image2`, `image3`, `image4`, `date`) VALUES
		('','$type','$category','$Nameby','$Ptype','$Street','$City','$Locality ','$Building','$Ttype',
		'$Cstatus','$Bedroom','$Bathroom','$Ftype','$Builtup','$Age','$Cost',
		'$Maintenence','$folder','$folder1','$folder2','$folder3','$folder4','$dt1')";
		 
		$result = mysqli_query($con, $query);

		if($result==1)
		{       

			header('location:my_properties.php');
				
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