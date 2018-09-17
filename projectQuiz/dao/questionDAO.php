<?php
/**
 * @author Andressa Rodrigues <andressaf.rodrigues@hotmail.com>
 */
  
require_once("../util/serialization.php");
require_once("../model/question.php");
 
class questionDAO 
{
 
    private $serialize;
 
    public function __construct() 
    {
        $this->serialize = new Serialization();
    }
 
    public function saveQuestion(Question $question) 
    {
        include "../config/ConnectionSQL.php";
        $resp = null;
        try {
            $sql = "INSERT INTO tb_question (subject,quiz_id,type) VALUES ('$question->subject', '$question->quizId', '$question->type')";
            $insert = false;
            if (mysqli_query($conn, $sql))
                $insert = true;
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

    public function getQuestionList() 
    {
        include "../config/ConnectionSQL.php";
        $sql     = "SELECT * FROM tb_question";
        $query   = mysqli_query($conn, $sql);
        $num_row = mysqli_num_rows($query);

        if ($num_row > 0) {
            while($rows = mysqli_fetch_assoc($query)) {

                if ($query = mysqli_query($conn, $sql)) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $idQuestion  = $row['id'];
                        $subject     = htmlspecialchars($row['subject']);
                        $type        = htmlspecialchars($row['type']);
                        if ($desc == null) {
                            $desc = '';
                        }
                        $result['resp'][] = [ 'id' => $idQuestion, 
                                              'subject'=> $subject, 
                                              'type' => $type
                                            ];
                    }
                }
            }
        }

        $result = json_encode($result);
        return $result;
    }
}