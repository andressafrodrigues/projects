<?php 

$require = filter_input(INPUT_GET, "require"); 

if ($require) {

	require_once("../controller/questionController.php");
	$questionController = new QuestionController();

	if ($require == "1") {
		require_once("../model/question.php");
		$question = new Question();
		$question->setSubject(filter_input(INPUT_POST,"subject"));
		$question->setType(filter_input(INPUT_POST,"typeQuestion"));
		$question->setQuizId(filter_input(INPUT_POST,"quizId"));
		$result = $questionController->saveQuestion($question);
		echo ($result);
	}

	if ($require == "listTypes"){
		require_once("../controller/typeController.php");
		$typeController = new TypeController();
		$responseTypes = $typeController->listTypes();
		echo ($responseTypes);
	}
}


?>