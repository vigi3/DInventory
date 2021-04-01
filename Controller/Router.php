<?php

require_once 'Controller/UserLoginController.php';
require_once 'Vue/Vue.php';


class Router {

    private UserLoginController $userLogCtrl;

    public function __construct()
    {
        $this->userLogCtrl = new UserLoginController();
    }

    public function routerRequest()
    {

        try {

            if (isset($_GET['action'])) 
            {
                echo 'action set';
            }
            else 
            {
                $this->userLogCtrl->userLogVue();
            }

        } 
        catch (Exception $error) {
            throw $error;
        }
    }



}