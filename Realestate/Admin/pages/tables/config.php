<?php
$con = mysqli_connect("localhost","root","","demo6");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?> 