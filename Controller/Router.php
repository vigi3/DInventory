<?php

require_once 'Controller/UserLoginController.php';
require_once 'Controller/MainPageController.php';
require_once 'Vue/Vue.php';


class Router {

    private UserLoginController $userLogCtrl;
    private MainPageController $mainPageLogCtrl;

    public function __construct()
    {
        $this->userLogCtrl = new UserLoginController();
        $this->mainPageLogCtrl = new MainPageController();
    }

    public function routerRequest()
    {

        try {
            
            if (isset($_POST['submit'])) 
            {
                if ($this->userLogCtrl->checkCredentials($_POST['username'], $_POST['password'])) {
                    $this->mainPageLogCtrl->mainPageVue('Accueil');
                }
                else {
                    $this->userLogCtrl->userLogVue();
                }
            }
            else if (isset($_GET['action'])) 
            {
                // if($_GET['action'] == 'UserLogin')
                // {
                //     echo 'Bravo';
                // }

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