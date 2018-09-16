<?php 

/**
 * 
 */
class Quiz
{
	public $name;
	public $description;
	public $createdAt;
	public $updatedAt;
 
    function getName() {
        return $this->name;
    }
 
    function setName($name) {
        $this->name = $name;
    }
 
    function getDescription() {
        return $this->description;
    }
 
    function setDescription($description) {
        $this->description = $description;
    }

	// function __construct()
	// {
	// 	saveQuiz();
	// }


	// public function saveQuiz() {
	// 	$response = null;
		
	// 	var_dump($sql);
	// 	$sql = "INSERT INTO tb_quiz (name, description) VALUES ('$this->name', '$this->description')";
	// 	if (mysql_query($sql)) {
	// 		$response['message'] = "Cadastrado com sucesso!";

	// 	}

	// 	$response = json_encode($response);
	// 	return $response;

	// }
}




?>