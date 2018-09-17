<?php 

/**
 * @author Andressa Felipe Rodrigues <andressaf.rodrigues@hotmail.com>
 */
class Question
{
	public $subject;
    public $quizId;
    public $type;

    public function getSubject() 
    {
        return $this->subject;
    }

    public function setSubject($subject) 
    {
        $this->subject = $subject;
    }

    public function getQuizId() 
    {
        return $this->quizId;
    }

    public function setQuizId($quizId) 
    {
        $this->quizId = $quizId;
    }

    public function getType() 
    {
        return $this->type;
    }

    public function setType($type) 
    {
        $this->type = $type;
    }

}




?>