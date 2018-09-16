<?php 
/**
 * @author Andressa Felipe Rodrigues <andressaf.rodrigues@hotmail.com
 */
	include 'ConnectionSQL.php';
	include '../model/User.php';

/**
 * 
 */
class Users extends Connection
{
	public function createUser(User $user) {
		$query = "INSERT INTO tb_user (username, password) VALUES (:username, :password)";
		$stmt = $this->Connection()->prepare($sql);
		$stmt->bindValue(":username", $user->getUsername());
		$stmt->bindValue(":password", $user->getPassword());
		$stmt->execute();
	}
}

 ?>