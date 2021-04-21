<?php

require_once 'Controller/UserLoginController.php';
require_once 'Controller/MainPageController.php';
require_once 'Controller/ReservationController.php';
require_once 'Vue/Vue.php';


class Router {

    private UserLoginController $userLogCtrl;
    private MainPageController $mainPageLogCtrl;
    private ReservationController $reservLogCtrl;

    public function __construct()
    {
        $this->userLogCtrl = new UserLoginController();
        $this->mainPageLogCtrl = new MainPageController();
        $this->reservLogCtrl = new ReservationController();
    }

    public function routerRequest()
    {

        try {
            
            if (isset($_POST['submit'])) 
            {
                if ($this->userLogCtrl->checkCredentials($_POST['username'], $_POST['password'])) {
                    $this->mainPageLogCtrl->mainPageVue();
                }
                else {
                    $this->userLogCtrl->userLogVue();
                }
            }
            else if (isset($_GET['action']) && !isset($_POST['submitReserv'])) 
            {
                switch ($_GET['action']) 
                {
                    case 'MainPage':
                        $this->mainPageLogCtrl->mainPageVue();
                        break;
                    case 'Reservation':
                        $this->reservLogCtrl->mainPageVue();
                        break;
                }
            }
            else if (isset($_POST['submitReserv'])) 
            {
                $this->reservLogCtrl->setReservation();
                $this->mainPageLogCtrl->mainPageVue();
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