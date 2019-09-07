<?php


		$username = $_GET['username'];
		
		

		
		$con = mysqli_connect('localhost','root','','demo6');


		$query = "INSERT INTO `multiple`(`request`, `username`) VALUES ('Request','$username')";

		$result = mysqli_query($con, $query);

		if($result==1)
		{       

			header("location:index.php");
				
		 }else 
		 {       
			echo "Insertion Failed";

		}
		
?>