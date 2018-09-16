<?php 
include('model/User.php');

	/**
	 * 
	 */
	class userController
	{
		public $model;
		public function __construct(argument)
		{
			$this->model = new model();
		}



		public function invoke() {

        $result = $this->model->getLogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
        if($reslt == 'login')
        {
        	include 'view/Afterlogin.php';
        }
        else
        {
        	include 'view/login.php';
        }

    }

}
	// $getType = $_POST["type"];
	// $user = $_POST["username"];
	// $password = $_POST["password"];

	// if($getType == "Login"){
	// 	echo login($user,$password);
	// }

	// function login($user,$pass){
	// 	include("../model/User.php");
	// 	$newUser = new User($user,$pass);
	// 	$login = $newUser->login($newUser);

	// 	$response = "";
	// 	if ($login){
	// 		$response["Return"] = True;
	// 		$response["Mensagem"] = "Login Efetuado com Sucesso!";
	// 	}else{
	// 		$response["Return"] = False;
	// 		$response["Mensagem"] = "Usuário ou Senha Incorretos!";
	// 	}
	// 	$response = json_encode($response);
	// 	return $response;
	// }

?>