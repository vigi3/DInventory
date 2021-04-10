<?php

require_once 'Model/User.php';
require_once 'Vue/Vue.php';

class UserLoginController {

    private $user;

    public function userLogVue()
    {
        $vue = new Vue('UserLogin');
        $vue->generateLoginVue();
    }

    /** 
     * @param string $username and $password 
     * 
     * @return void
     * Check credential of a user, redirect back to login page if wrong login.
    */

    public function checkCredentials(string $username, string $password): bool
    {
        $validCred = false;
        $this->user = new User();

        $usernameArray = array($username);
        $passwordArray = array($password);
        $usernameArray = array($username);
        $firstNameUserArray = array();


        if ($this->user->usernameEquals($usernameArray) && $this->user->passwordEquals($passwordArray)) 
        {
            $firstNameUserArray[] = $this->user->getName($usernameArray);
            $validCred = true;
            return $validCred;
        }
        
        return $validCred;
    }

}