<?php 

/**
 * @author Andressa Felipe Rodrigues <andressaf.rodrigues@hotmail.com>
 */
class Question
{
	public $subject;
    public $quizId;
    public $type;

    function getSubject() {
        return $this->subject;
    }

    function setSubject($name) {
        $this->subject = $subject;
    }

    function getQuizId() {
        return $this->quizId;
    }

    function setQuizId($quizId) {
        $this->quizId = $quizId;
    }

    function getType() {
        return $this->type;
    }

    function setType($type) {
        $this->type = $type;
    }

}




?>