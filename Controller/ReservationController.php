<?php

require_once 'Model/User.php';
require_once 'Model/Item.php';
require_once 'Model/Reservation.php';
require_once 'Vue/Vue.php';

class ReservationController {

    private Reservation $reservation;
    private Item $item;

    public function __construct()
    {
        $this->reservation = new Reservation();
        $this->item = new Item();
    }

    public function mainPageVue(): void 
    {
        session_start();
        if (!$_SESSION['name']) 
        {
            header("Location: index.php");
        }
        $searchItemList = $this->item->getAllItems();
        $vue = new Vue('Reservation');
        $vue->generate(array('searchItemList'=>$searchItemList));
    }

    public function setReservation(): void 
    {
        session_start();
        $itemIdArray = $this->item->getIdItemsByName($_POST['itemSelect']);
        $dateStart = date_create($_POST['dateStart']);
        $dateEnd = date_create($_POST['dateEnd']);

        $this->reservation->setReservation(date_format($dateStart, 'Y-m-d'),date_format($dateEnd, 'Y-m-d'), $_SESSION['id'], $itemIdArray['id']);
    }
}