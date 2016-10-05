<?php
	session_start();
	include_once 'dbconnect.php';
	
	if(isset($_SESSION['user'])!="")
	{
		session_destroy();
		unset($_SESSION['user']);
		unset($_SESSION['services']);
		unset($_SESSION['geolocationApproval']);
		header("Location: login.php");
	}
?>
