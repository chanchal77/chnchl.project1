<?php

		$Name = $_POST['name'];
		$Mobile = $_POST['mobile'];
		$Email = $_POST['email'];
		$Msg = $_POST['msg'];
        $subj="hello";
		
		$con = mysqli_connect('localhost','root','','demo6');


		$query = "INSERT INTO `feedback`('id' ,`name`, `Mobile`, `mail`, `msg`)
		VALUES (1,'$Name','$Mobile','$Email','$Msg')";

		$result = mysqli_query($con, $query);

		if (mail($Email,$Msg,$subj))
		{
			echo"mail";
		}
		else
		{
			echo"sry";
		}
		
		/*image display
		
		$sql = "SELECT * FROM `propertydetails`";
		
		if($row = mysql_fetch_assoc($sql))
		{
			echo'<img scr="data:image/jpeg;64,'.base64_encode($row['image']).'" width="150" height="150">';
		}
	*/
?>