<?php
 
$require = filter_input(INPUT_GET, "require"); 
    var_dump($require);
 
if ($require) {
    require_once("../controller/quizController.php");
    $quizController = new quizController();
    if ($require == "1") {
        require_once("../model/quiz.php");
        $quiz = new Quiz();
         
        $quiz->setName(filter_input(INPUT_POST, "name"));
        $quiz->setDescription(filter_input(INPUT_POST, "description"));
        
        echo $quizController->saveQuiz($quiz);
    }
 
 
    if ($require == "2") {
        // echo $quizController->RetornarTodos();
    }
}
?>