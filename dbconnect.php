<?php
	$con = mysqli_connect("localhost","root", "123456", "lalaservice_db");
	if (mysqli_connect_errno())
	  {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
		
	mysqli_select_db($con,"rohitdb");

?>