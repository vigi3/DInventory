<?php

require_once 'Model/User.php';
require_once 'Model/Item.php';
require_once 'Vue/Vue.php';

class ItemController {

    private Item $item;

    public function __construct()
    {
        $this->item = new Item();
    }

    public function mainPageVue(): void 
    {
        session_start();
        if (!$_SESSION['name']) 
        {
            header("Location: index.php");
        }
        $ItemLongList = $this->item->getAllItems();
        $vue = new Vue('itemList');
        $vue->generate(array('ItemLongList'=>$ItemLongList));
    }
}