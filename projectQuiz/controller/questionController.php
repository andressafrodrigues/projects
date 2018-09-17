<?php 

/**
 * @author Andressa Felipe Rodrigues <andressaf.rodrigues@hotmail.com>
 */
require_once("../dao/questionDAO.php");

class QuestionController
{
	private $questionDAO;

	public function __construct() {
		$this->questionDAO = new QuestionDAO();
	}

    public function saveQuestion(Question $question) {
        if ($question->getSubject() != "" && $question->getType() != "") {
            return $this->questionDAO->saveQuestion($question);
        } else {
            return false;
        }
    }

    public function listQuestion(Question $question){
        if ($question->getSubject()!= '' && $question->getType() != '') {
            return $this->questionDAO->getQuestionList($question);
        }
    }

}






?>