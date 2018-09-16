<?php
 
$require = filter_input(INPUT_GET, "require"); 
if ($require) {
    require_once("../controller/quizController.php");
    $quizController = new quizController();
    if ($require == "1") {
        require_once("../model/quiz.php");
        $quiz = new Quiz();
        $quiz->setName(filter_input(INPUT_POST, "name"));
        $quiz->setDescription(filter_input(INPUT_POST, "description"));
        $result = $quizController->saveQuiz($quiz);

        echo ($result);
    }
}
?>