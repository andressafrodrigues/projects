<?php 
/**
 * @author Andressa Rodrigues <andressaf.rodrigues@hotmail.com>
 */

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', null);
define('DATABASE', 'db_quiz');

$conn = new mysqli(HOST,USER,PASSWORD,DATABASE);
if ($conn->connect_errno){
	echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

mysqli_query($conn, "SET NAMES 'utf8'");

?>