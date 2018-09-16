<?php 

/**
 * @author Andressa Felipe Rodrigues <andressaf.rodrigues@hotmail.com>
 */
class Quiz
{
	public $name;
	public $description;
	
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
}




?>