<?php
 
/**
 * @author Andressa Felipe Rodrigues <andressaf.rodrigues@hotmail.com>
*/

require_once("../dao/quizDAO.php");

class QuizController
{
 
    private $quizDAO;
 
    public function __construct() 
    {
        $this->quizDAO = new QuizDAO();
    }
 
    public function saveQuiz(Quiz $quiz) 
    {
        if ($quiz->getName() != "" && $quiz->getDescription() != "") {
            return $this->quizDAO->saveQuiz($quiz);
        } else {
            return false;
        }
    }

    public function listQuiz()
    {
        return $this->quizDAO->getQuizList();
    }
}
 
?>