<?php 
include 'header.php';
?>

<html>
<head>
<style>
table {
    margin-top: 50px;
    margin-bottom: 50px;
	height: 250px;

width: 200px;

background-color: whitesmoke;
}
</style>
</head>

<body>
<form action="citiwise_enquiryreport.php" method="post">
<table  border=" 1" align="center" >
	<tr>
		<td colspan="5" align="center" >
			<h3 >Enquiry Reports</h3>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center" >
			<input type="radio" name="citywise">City wise</td>
			<td colspan="4" align="center"><input type="radio" name="citywise">Date wise</td>
		</td>
	</tr>
	
	<tr>
		<td>Enter City</td>
		<td><input type="text" name="city"></td>
		
		<td><input type="text" name="date_from" placeholder="from"></td>
		<td>To</td>
		<td><input type="text" name="date_to" placeholder="To"></td>
		</td>
	</tr>
	<tr>
	<td colspan="2" align="center">
	<input type="submit" name ="submit1" value="submit">
	</td>
	<td colspan="3" align="center">
	<input type="submit" name ="submit2" value="submit">
	</td>
	</tr>
</table>
</body>
</html>



<?php
include 'footer.php';

?>