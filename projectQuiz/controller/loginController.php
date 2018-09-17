<?php
 
require_once("../dao/loginDAO.php");
 
class LoginController {
 
    private $loginDAO;
 
    public function __construct() {
        $this->loginDAO = new LoginDAO();
    }
 
    public function logIn(Login $login) {
        if ($login->getUsername() != "" && $login->getPassword() != "") {
            return $this->loginDAO->logIn($login);
        } else {
            return false;
        }
    }
}
 
?>