<?php 
/**
 * @author Andressa Rodrigues <andressaf.rodrigues@hotmail.com>
 
 */

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', null);
define('DATABASE', 'db_quiz');

/*
$conn = mysql_connect(HOST, USER, PASSWORD) or die('Erro na conexão');
$selectdb = mysql_select_db(DATABASE, $conn);
*/

$conn = new mysqli(HOST,USER,PASSWORD,DATABASE);
if ($conn->connect_errno){
	echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

/*
$result   = mysql_query("SELECT * FROM tb_user WHERE username = " .$userlogin . " AND password=" . $userpass);

if (mysql_num_rows($result)> 0 ) {
	$_SESSION['username'] = $userlogin;
	$_SESSION['password'] = $userpass;
    echo('Login efetuado');
} else {
	unset($_SESSION['username']);
	unset($_SESSION['password']);
}
*/

?>