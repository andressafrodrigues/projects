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
        $resp = null;
        try {
            $sql = "INSERT INTO tb_quiz (name, description) VALUES ('$quiz->name', '$quiz->description')";
            $insert = false;
            if (mysqli_query($conn, $sql)) {
                $insert = true;
            }
            if ($insert) {
                $resp['message'] = "Ei, sua pergunta foi cadastrada!";
                $resp['result']  = true;
            } else {
                $resp['message'] = "Ops, problemas ao cadastrar. ):";
                $resp['result']  = false;
            }
        } catch (Exception $ex) {
            $resp['message'] = "Ops, problemas ao cadastrar: " . $ex->getMessage();
            $resp['result']  = false;
        }
        $resp = json_encode($resp);
        return $resp;
    }
}