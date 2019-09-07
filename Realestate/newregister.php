<?php
	
	$dbhandle = mysql_connect("localhost","root","");
	$selected = mysql_select_db("demo6",$dbhandle);
	
	
	if(isset($_POST['username'])&& isset($_POST['email'])&& isset($_POST['password'])
		&& isset($_POST['mob'])&& isset($_POST['cat']))
	{
		$user = $_POST['username'];
		$mail = $_POST['email'];
		$Pass = $_POST['password'];
		$Mob = $_POST['mob'];
		$Category = $_POST['cat'];
		$Name = $_FILES['image']['tmp_name'];
		$img = $_FILES['image']['name'];
		$folder = "image/".$img;
		$filetype = $_FILES['image']['type'];
		$dt1= date("Y-m-d");
		
		move_uploaded_file($Name,$folder);
		
		$query = mysqli_query("select * from `registration` where username = '$user'");
		
		if(mysql_num_rows($query) > 1)
		{
			echo"Username alredy exist";
		}else
		{
			mysql_query("INSERT INTO `registration`(`id`, `username`, `email`, `password`, `conpass`, `category`, `regi_image`, `date`) VALUES 
			('','$user','$mail','$Pass','$Mob','$Category','$folder','$dt1')");
			
			header('Location: login.html');
		}
	}else
	{
		echo"sry...";
	}