<?php 
	$server   = "localhost";
	$username = "root";
	$password = "";
	$conn     = mysql_connect($server, $username, $password);

	if (!$conn) {
		die('Ocorreu um erro ao conectar: ' . mysql_error());
	} else {
		echo "Conexao efetuada com sucesso!";
	}

	mysql_close($conn);


 ?>