<?php 
// include ('../config/ConnectionSQL.php');
session_start();

$require = filter_input(INPUT_GET, "require"); 
if ($require) {
    require_once("../controller/loginController.php");
    $loginController = new loginController();
    if ($require == "1") {
        require_once("../model/login.php");
        $login = new Login();
        $login->setUsername(filter_input(INPUT_POST, "username"));
        $login->setPassword(filter_input(INPUT_POST, "password"));
        $result = $loginController->logIn($login);

        echo ($result);
    }
}

?>

