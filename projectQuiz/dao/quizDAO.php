<?php
 
require_once("../util/serialization.php");
require_once("../model/quiz.php");
 
class quizDAO {
 
    private $serialize;
 
    public function __construct() {
        $this->serialize = new Serialization();
    }
 
    public function saveQuiz(Quiz $quiz) {
    include "../config/ConnectionSQL.php";
        try {
            $sql = "INSERT INTO tb_quiz (name, description) VALUES ('$quiz->name', '$quiz->description')";
            var_dump($sql);
            if (mysqli_query($conn, $sql)) {
                var_dump('Cadastrou!');
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }  
}