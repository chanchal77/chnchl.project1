
<html>
<?php
error_reporting(0);

	$id=$_GET['id'];
	
	$con = mysqli_connect('localhost','root','','demo6');
	
	$query = "DELETE FROM propertydetails WHERE id = '$id'";

	$run= mysqli_query($con,$query);
	
	if($run==true)
	{

			header('location:delete.php');
	}else
	{
		
		echo"Error";
	}

?>

</body>
</html>