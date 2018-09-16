<?php
 
require_once("../dao/quizDAO.php");
 
class quizController {
 
    private $quizDAO;
 
    public function __construct() {
        $this->quizDAO = new quizDAO();
    }
 
    public function saveQuiz(Quiz $quiz) {
        if ($quiz->getName() != "" && $quiz->getDescription() != "") {
            return $this->quizDAO->saveQuiz($quiz);
        } else {
            return false;
        }
    }

    public function listQuiz(Quiz $quiz){
        return $this->quizDAO->getQuizListById($quiz);
    }
}
 
?>