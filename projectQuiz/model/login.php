<?php 

/**
 * @author Andressa Felipe Rodrigues <andressaf.rodrigues@hotmail.com>
 */
class Login
{
	public $username;
	public $password;
	
    function getUsername() {
        return $this->username;
    }
 
    function setUsername($username) {
        $this->username = $username;
    }
 
    function getPassword() {
        return $this->password;
    }
 
    function setPassword($password) {
        $this->password = $password;
    }
}




?>