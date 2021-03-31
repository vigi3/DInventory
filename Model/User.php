<?php

require_once 'Model/Model.php';

class User extends Model {

    /** 
     * @return string $nameRetrieved
     * The name of a user
    */
    public function getName(string $name) {
        $sql = 'SELECT Name FROM user WHERE Name=?';
        $nameRetrieved = $this->RequestDB($sql, $name);
        return $nameRetrieved;
    }

    /** 
     * @return User object $userCreationReq
     * The new User created
    */
    public function newUser(string $name, string $lastName, int $role, string $username, string $password) {
        $sql = 'INSERT INTO user (Name, Lastname, Role, Username, Password) VALUES (?, ?, ?, ?, ?)';
        $userCreationReq = $this->RequestDB($sql, $name, $lastName, $role, $username, $password);
        return $userCreationReq;
    }

    /** 
     * @return bool
     * True if $username = $usernameRetrieved
    */
    public function usernameEquals(string $username): bool {
        $sql = 'SELECT Username FROM user WHERE Username=?';
        $usernameRetrieved = $this->RequestDB($sql, $username);
        if($usernameRetrieved === $username){
            return true;
        }
        else {
            return false;
        }
    }

    /** 
     * @return bool
     * True if $password = $passwordRetrieved
    */

    public function passwordEquals(string $password): bool {
        $sql = 'SELECT Password FROM user WHERE Password=?';
        $passwordRetrieved = $this->RequestDB($sql, $password);
        if($passwordRetrieved === $password){
            return true;
        }
        else {
            return false;
        }
    }






}