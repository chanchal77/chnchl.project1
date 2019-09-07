<?php
		
		
		$index=1;
		$id=$_GET["id"];
		$Status = $_POST["action"];
		
		$con = mysqli_connect('localhost','root','','demo6');

		$query = "INSERT INTO `alerts`(`approval`,`regi_id`) VALUES ('$Status','$id')";
		
		$run= mysqli_query($con,$query);


		if($run==1)
		{
			echo "ok";
		}else
		{
			echo"please try again";
		}
	
	

	

?>
<!--isset($_POST['action'])-->



