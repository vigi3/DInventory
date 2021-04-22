<?php

require_once 'Model/User.php';
require_once 'Model/Item.php';
require_once 'Vue/Vue.php';

class AddItemController {

    private Item $item;

    public function __construct()
    {
        $this->item = new Item();
    }

    public function mainPageVue(): void 
    {
        if (!isset($_SESSION)) 
        {
            session_start();
            if (!$_SESSION['name']) 
            {
                header("Location: index.php");
            }
        }    
        $ItemList = $this->item->getAllItems();
        $vue = new Vue('AddItem');
        $vue->generate(array('ItemList'=>$ItemList));
    }

    /** 
     * 
     * @return void  
     * Add a new Item
     * 
    */
    public function addNewItem(): void 
    {
        session_start();
        $inputsForm = array('nameItem', 'typeNameItem', 'initialStock');
        foreach ($inputsForm as $oneInput) 
        {
            if (empty($_POST[$oneInput])) 
            {
                $this->mainPageVue();
            }
        }
        //$_POST['initialStock'] and stock left are the same when a new object is added.
        //Stock are full so StateItem = 3  
        $this->item->CreateOneItem($_POST['nameItem'], $_POST['typeNameItem'], 3, $_POST['initialStock'], $_POST['initialStock']);
    }
}