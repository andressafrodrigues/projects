<?php
 
require_once("../util/serialization.php");
require_once("../model/question.php");
 
class questionDAO {
 
    private $serialize;
 
    public function __construct() {
        $this->serialize = new Serialization();
    }
 
    public function saveQuestion(Question $question) {
        include "../config/ConnectionSQL.php";
        $resp = null;
        try {
            $sql = "INSERT INTO tb_question (subject, quiz_id, type) VALUES ('$question->subject', '$question->quiz_id', '$question->type')";
            $insert = false;
            if (mysqli_query($conn, $sql)) {
                $insert = true;
            }
            if ($insert) {
                $resp['message'] = "Sua questão foi cadastrada!";
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