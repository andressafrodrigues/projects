<?php 
session_start();

include ('../config/ConnectionSQL.php');

if (isset($_GET['login'])){
	$response = null;
	if ((isset($_POST['username'])) && (isset($_POST['password']))){	
		$username = (isset($_REQUEST['username'])  ? $_REQUEST['username']  : '');
		$password = (isset($_REQUEST['password'])  ? $_REQUEST['password']  : '');
		if ((!empty($username)) && (!empty($password))) {
			$login = false;
			$query =	"select ".
						"	username as login ".
						"from ".
						"	tb_user ".
						"where ".
						"	username = '".$username."' and ".
						"	password = '".$password."'; ";
			$result = mysqli_query($conn,$query);
			if ($result === FALSE){
				die(mysqli_error($conn));
			}
			while ($row = mysqli_fetch_assoc($result)){
				$login = true;
			}
			mysqli_close($conn);
			if($login){
				$response['result']    = true;
				$response['message'] = "Sucesso ao fazer o login ♥☻";
			}else{
				$response['result'] = false;
				$response['message'] = "Erro ao fazer o login";			
			}
		} else {
			$response['result'] = false;
			$response['message'] = "Erro";	
		}
		$response = json_encode($response);
		echo $response;
	} 
}
?>

