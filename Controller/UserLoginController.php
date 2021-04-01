<?php

require_once 'Model/User.php';
require_once 'Vue/Vue.php';

class UserLoginController {

    private User $user;
    private $username;
    private $password;
    private string $name;

    public function __construct()
    {
        $this->user = new User();
    }

    public function userLogVue()
    {
        $vue = new Vue('UserLogin');
        $vue->generateVue();
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

    public function checkCredentials(string $inputUsername, string $inputPassword)
    {
        if (isset($_POST['submit'])) 
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->user->usernameEquals($inputUsername) || $this->user->passwordEquals($inputPassword)) 
            {
                echo $inputUsername;
            }
        }
        
    }


}