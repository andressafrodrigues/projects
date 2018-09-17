<?php
/**
 * @author Andressa Rodrigues <andressaf.rodrigues@hotmail.com>
 */
  
$require = filter_input(INPUT_GET, "require"); 

if ($require) {
    require_once("../controller/quizController.php");

    $quizController = new QuizController();
    if ($require == "1") {
        require_once("../model/quiz.php");
        $quiz = new Quiz();
        $quiz->setName(filter_input(INPUT_POST, "name"));
        $quiz->setDescription(filter_input(INPUT_POST, "description"));
        $result = $quizController->saveQuiz($quiz);

        echo $result;
    }


    if ($require == "2") {
        require_once("../model/quiz.php");
        $quiz = new Quiz();
        $res = $quizController->listQuiz($quiz);
        echo $res;
    }
}
?>