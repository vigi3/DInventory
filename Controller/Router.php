<?php

require_once 'Controller/UserLoginController.php';
require_once 'Controller/MainPageController.php';
require_once 'Controller/ReservationController.php';
require_once 'Controller/ItemController.php';
require_once 'Controller/AddItemController.php';
require_once 'Vue/Vue.php';


class Router {

    private UserLoginController $userLogCtrl;
    private MainPageController $mainPageLogCtrl;
    private ReservationController $reservLogCtrl;
    private ItemController $itemCtrl;
    private AddItemController $addItemCtrl;

    public function __construct()
    {
        $this->userLogCtrl = new UserLoginController();
        $this->mainPageLogCtrl = new MainPageController();
        $this->reservLogCtrl = new ReservationController();
        $this->itemCtrl = new ItemController();
        $this->addItemCtrl = new AddItemController();
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
            else if (isset($_GET['action']) && !isset($_POST['submitReserv']) && !isset($_POST['submitAddItem'])) 
            {
                switch ($_GET['action']) 
                {
                    case 'MainPage':
                        $this->mainPageLogCtrl->mainPageVue();
                        break;
                    case 'Reservation':
                        $this->reservLogCtrl->mainPageVue();
                        break;
                    case 'ItemList':
                        $this->itemCtrl->mainPageVue(); 
                        break;
                    case 'AddItem':
                        $this->addItemCtrl->mainPageVue();
                        break;       
                }
            }
            else if (isset($_POST['submitReserv'])) 
            {
                $this->reservLogCtrl->setReservation();
                $this->mainPageLogCtrl->mainPageVue();
            }
            else if (isset($_POST['submitAddItem'])) 
            {
                $this->addItemCtrl->addNewItem();
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