<?php

require_once 'Model/Model.php';

class User extends Model {

    /** 
     * @param string username
     * getName by Username after Login
     * 
     * @return string $nameRetrieved
     * The name of a user
    */
    public function getName(array $username) {
        $sql = 'SELECT Name FROM user WHERE Username=?';
        $nameRetrieved = $this->RequestDB($sql, $username);
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
     * @param array of 1 string
     * 
     * @return bool
     * True if $username = $usernameRetrieved
    */
    public function usernameEquals($username): bool {
        $correctUsername = false;
        $sql = 'SELECT Username FROM user WHERE Username=?';
        $usernameRetrieved = $this->RequestDB($sql, $username);
        if($usernameRetrieved[0] == $username[0]){
            $correctUsername = true;
            return $correctUsername;
        } 
        return $correctUsername;  
    }

    /** 
     * @param array of 1 string
     * 
     * @return bool
     * True if $password = $passwordRetrieved
    */

    public function passwordEquals($password): bool {
        $correctPassword = false;
        $sql = 'SELECT Password FROM user WHERE Password=?';
        $passwordRetrieved = $this->RequestDB($sql, $password);
        if($passwordRetrieved[0] == $password[0]){
            $correctPassword = true;
            return $correctPassword;
        }
        return $correctPassword;
    }






}