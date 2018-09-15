<?php 
	$server   = "localhost";
	$username = "root";
	$password = "";
	$database = "db_quiz";

	$conn     = mysql_connect($server, $username, $password) or die();
	$teste    = mysql_select_db($database, $conn);

	mysql_close($conn);


 ?>