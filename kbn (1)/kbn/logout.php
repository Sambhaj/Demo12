<?php
//******For Logout******
	session_start();
	
	unset($_SESSION["username"]);
	header("Location:admin.php");
?>