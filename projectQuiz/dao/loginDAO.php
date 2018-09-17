<?php 
require_once("../util/serialization.php");
require_once("../model/login.php");
 
class LoginDAO {
 
    private $serialize;
 
    public function __construct() {
        $this->serialize = new Serialization();
    }
 
    public function loginUser(Login $login) {
        include "../config/ConnectionSQL.php";
        $response = null;
        
        try {

        	$query = "SELECT username as login 
					  FROM tb_user 
			          WHERE username = '$login->username' 
			          AND password = '$login->password'";

            $selectUser = mysqli_query($conn, $query);
            $login = false;

            if (mysqli_num_rows($selectUser)> 0)
                $login = true;

            if ($login == true) {
                $response['message'] = "Login efetuado com sucesso!";
                $response['result']  = true;
            } else {
                $response['message'] = "Login errado!";
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