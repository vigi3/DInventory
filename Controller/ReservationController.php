<?php

require_once 'Model/User.php';
require_once 'Model/Item.php';
require_once 'Model/Reservation.php';
require_once 'Vue/Vue.php';

class ReservationController {

    private Reservation $reservation;

    public function __construct()
    {
        $this->reservation = new Reservation();
    }

    public function mainPageVue(): void 
    {
        session_start();
        $vue = new Vue('Reservation');
        $searchItemList = array();
        $vue->generate(array('searchItemList'=>$searchItemList));
    }
}