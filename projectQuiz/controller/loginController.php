<?php
 
require_once("../dao/loginDAO.php");
 
class loginController {
 
    private $loginDAO;
 
    public function __construct() {
        $this->loginDAO = new loginDAO();
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