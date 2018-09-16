<?php 

/**
 * @author Andressa Felipe Rodrigues <andressaf.rodrigues@hotmail.com>
 */
include('../config/ConnectionSQL.php');
class User
{
	private $username;
	private $password;

	function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
	}

	public function getLogin() {
		$user   = mysql_real_escape_string($connection, $_POST['username']);
		$pass   = mysql_real_escape_string($connection, $_POST['password']);
		$query  = "SELECT*FROM tb_user WHERE user = '{$user}' AND password = '{$pass}';" 		
		$result = mysqli_query($connection, $query);
		$row    = mysqli_num_rows($result);

		if ($row == 1) {
			$_SESSION['username'] = $user;
			header("Location: ../Teste.php")
		} else {
		 	die('Nope');
		}
	}

	// public function validateLogin(){

	// }
}



?>