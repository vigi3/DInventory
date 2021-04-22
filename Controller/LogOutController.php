<?php

require_once 'Model/User.php';
require_once 'Model/Item.php';
require_once 'Vue/Vue.php';

class LogOutController {

    public function logOutUser()
    {
        session_start();
        session_unset();
        session_destroy();
    }
}