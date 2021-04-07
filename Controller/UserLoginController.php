<?php

require_once 'Model/User.php';
require_once 'Vue/Vue.php';

class UserLoginController {

    private $user;
    private $username;
    private $password;
    private string $name;
    private string $title;


    public function userLogVue()
    {
        $vue = new Vue('UserLogin');
        $vue->generateLoginVue();
    }


     /** 
     * @return void
     * Create a new user
    */
    // public function userCreation(string $name, string $lastName, int $role, string $username, string $password): void 
    // {
    //     $user = $this->user->newUser($name, $lastName, $role, $username, $password);
    // }



    // public function getNameUser(string $username)
    // {
    //     $name = $this->user->getName($username);
    //     $vue = new Vue('UserLogin');
    //     $vue->generate(array('name' => $name));
    // }

    public function checkCredentials(string $username, string $password)
    {
        $this->user = new User();
        $usernameArray = array();
        $usernameArray[] = $username; 

        $passwordArray = array();
        $passwordArray[] = $password;
        
        $firstNameUserArray = array();
        if ($this->user->usernameEquals($usernameArray) || $this->user->passwordEquals($passwordArray)) 
        {
            $firstNameUserArray[] = $this->user->getName($username);
            $vueMainPage = new Vue('MainPage');
            $vueMainPage->generate(array('name' => $firstNameUserArray));
        }
        else 
        {
            
        }
    }
}