<?php

abstract class Model {

    private $database;


    //Request to db with parameters or without 
    public function RequestDB($sql, $params = null): PDOStatement {
        if($params == null ){
            $resultRequest = $this->getDatabase()->query($sql);
        }
        else {
            $resultRequest = $this->getDatabase()->prepare($sql);
            $resultRequest->execute($params);
        }

        return $resultRequest;
    }

    private function getDatabase(): PDO {
        if($this->database == null){
            $this->database = new PDO('mysql:host=localhost;dbname=projet2_db;charset=utf8','root', '',
                                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->database;
    }


}