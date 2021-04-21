<?php

abstract class Model {

    private $database;


    //Request to db with parameters or without 
    public function RequestDB($sql, $params = null) 
    {
        if($params == null ){
            $resultRequest = $this->getDatabase()->query($sql);
        }
        else {
            $request = $this->getDatabase()->prepare($sql);
            $request->execute($params);
            if ($request->rowCount() > 0) {
                $resultRequest = $request->fetch(PDO::FETCH_BOTH);
            }
            else {
                $resultRequest = array('empty');
            }
        }
        return $resultRequest;
    }

    /*
    *Fetch with PDO is required with INSERT sql Statement  
    */
    public function RequestDBWithInsert($sql, $params = null) 
    {
        if($params == null ){
            $resultRequest = $this->getDatabase()->query($sql);
        }
        else {
            $request = $this->getDatabase()->prepare($sql);
            $request->execute($params);
            if ($request->rowCount() > 0) {
                return $request;
            }
            else {
                $resultRequest = array('empty');
            }
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