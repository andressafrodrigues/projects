<?php 
require_once("../util/serialization.php");
require_once("../model/login.php");
 
class loginDAO {
 
    private $serialize;
 
    public function __construct() {
        $this->serialize = new Serialization();
    }
 
    public function logIn(Login $login) {
        include "../config/ConnectionSQL.php";
        $response = null;
        try {
        	$query = "SELECT username as login 
					  FROM tb_user 
			          WHERE username = '$login->username' 
			          AND password = '$login->password'";
            $login = false;
            if (mysqli_query($conn, $query)) {
                $login = true;
            }
            if ($login) {
                $response['message'] = "Login efetuado com sucesso!";
                $response['result']  = true;
            } else {
                $response['message'] = "Ops, algo deu errado! ):";
                $response['result']  = false;
            }
        } catch (Exception $ex) {
            $response['message'] = "Ops, problemas ao logar: " . $ex->getMessage();
            $response['result']  = false;
        }
        $response = json_encode($response);
        return $response;
    }
}

?>