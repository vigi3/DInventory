<?php

require_once 'Model/Model.php';

class User extends Model {

    /** 
     * @return string $usernameRetrieved
     * The username to sign-in
    */
    public function getUsername(string $username) {
        $sql = 'SELECT Username FROM user WHERE Username=?';
        $usernameRetrieved = $this->RequestDB($sql);
        return $usernameRetrieved;
    }

    /** 
     * @return User object $userCreationReq
     * The new User created
    */
    public function newUser(string $name, string $lastName, string $username, string $password, int $role) {
        $sql = 'INSERT INTO user (Name, Lastname, Role, Username, Password) VALUES (?, ?, ?, ?, ?)';
        $userCreationReq = $this->RequestDB($sql, $name, $lastName, $username, $password);
        return $userCreationReq;
    }

    /** 
     * @return bool
     * True if $password = $passwordRetrieved
    */

    public function passwordEquals(string $password): bool {
        $sql = 'SELECT Password FROM user WHERE Password=?';
        $passwordRetrieved = $this->RequestDB($sql, $password);
        if(!$passwordRetrieved == null){
            return true;
        }
        else {
            return false;
        }
    }






}