<?php

require_once 'Model/User.php';
require_once 'Model/Item.php';
require_once 'Vue/Vue.php';

class ItemController {

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
        $ItemLongList = $this->item->getAllItems();
        $vue = new Vue('itemList');
        $vue->generate(array('ItemLongList'=>$ItemLongList));
    }
}