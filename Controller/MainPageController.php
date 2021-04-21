<?php

require_once 'Model/User.php';
require_once 'Model/Item.php';
require_once 'Vue/Vue.php';

class MainPageController {

    private array $titleArray = array('title'=>'Accueil');
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
        }
        if (!isset($_SESSION['name'])) 
        {
            $_SESSION['name'] = $this->getName($_POST['username']);
            $_SESSION['id'] = $this->getIdUSer($_POST['username']);
        }
        $itemList = $this->item->getAllItems();
        $totalStockLeft = $this->getTotalStockLeftItems();
        $numberItemLow = $this->getItemsWithLowStock();
        $numberOSItem = $this->getOutOfStockItems();
        $this->setStateOfStock(); 
        $vue = new Vue('MainPage');
        $vue->generate(array('title'=>$this->titleArray, 
                             'itemList'=>$itemList,
                             'stockLeftT'=>$totalStockLeft,
                             'numberItemLow'=>$numberItemLow, 
                             'numberOSItem'=>$numberOSItem));
    }

    public function getName(string $username): string
    {
        $usernameArray = array($username);
        $UserInSession = new User();
        $nameUser = $UserInSession->getName($usernameArray);
        return $nameUser[0];
    }

    public function getIdUSer(string $username): int
    {
        $UserNameInSession = new User();
        $idUser = $UserNameInSession->getId($username);
        return $idUser[0];
    }

    public function getTitlePage(): string
    {
        $titleMainPage = $this->titlePage;
        return $titleMainPage;
    }


    /** 
     * Set the state depending on the stock quantity and stock left 
     * 0 = Out of Stock
     * 1 = Low
     * 2 = half
     * 3 = In Stock
     * 
     * @return void
     * 
    */
    public function setStateOfStock(): void
    {
        $itemList = $this->item->getAllItems();
        foreach ($itemList as $OneItem) 
        {
            $stockDiff = intval(($OneItem['stockI'] * 100) / $OneItem['initStock']);
            $intId = $OneItem['id'];

            if ($stockDiff < 100 && $stockDiff > 50) 
            {
                $intState = 3;
                $this->item->setStateItem($intState, $intId);
            } 
            elseif ($stockDiff <= 50 && $stockDiff > 25) 
            {
                $intState = 2;
                $this->item->setStateItem($intState, $intId);
            }
            elseif ($stockDiff <= 25 && $stockDiff > 0) 
            {
                $intState = 1;
                $this->item->setStateItem($intState, $intId);
            }
            elseif ($stockDiff = 0) 
            {
                $intState = 0;
                $this->item->setStateItem($intState, $intId);
            }   
        }
    }

    /** 
     * 
     * @return array $stockLeftArray
     * Get the total amount of stock Left
     * 
    */
    public function getTotalStockLeftItems(): array
    {
        $itemList = $this->item->getAllItems();
        $stockLeftT = 0;
        foreach ($itemList as $OneItem) 
        {
            $stockLeftT += $OneItem['stockI'];
        }
        $stockLeftArray = array('stockLeftTo'=>$stockLeftT);
        return $stockLeftArray;
    }

    /** 
     * 
     * @return array $countItemsLTArray
     * Get the total amount of item with Low Stock
     * 
    */
    public function getItemsWithLowStock(): array
    {
        $itemListLowStock = $this->item->getItemLowStock();
        $countItems = 0;
        foreach ($itemListLowStock as $OneItemLowStock) 
        {
            $countItems += 1;
        }
        $countItemsLTArray = array('stockLowAmount'=>$countItems);
        return $countItemsLTArray;
    }

    /** 
     * 
     * @return array $countItemsOSArray
     * Get the total amount of item Out Of Stock
     * 
    */
    public function getOutOfStockItems(): array
    {
        $itemListOutOfStock = $this->item->getItemOutOfStock();
        $countItems = 0;
        foreach ($itemListOutOfStock as $OneItemOutOfStock) 
        {
            $countItems += 1;
        }
        $countItemsOSArray = array('OutOfstockAmount'=>$countItems);
        return $countItemsOSArray;
    }




}