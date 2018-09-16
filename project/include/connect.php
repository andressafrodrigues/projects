<?php

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', null);
define('DATABASE', 'db_quiz');

$conn = mysql_connect(HOST, USER, PASSWORD) or die('Erro na conexão');
$db   = mysql_select_db(DATABASE, $conn);

?>