<?php

require_once 'Model/User.php';
require_once 'Model/Item.php';
require_once 'Vue/Vue.php';

class MainPageController {

    private ?string $nameUser = null;
    private array $titleArray = array('title'=>'Accueil');
    private Item $item;

    public function __construct()
    {
        $this->item = new Item();
        $this->setStateOfStock();
    }


    public function mainPageVue() 
    {
        session_start();
        $_SESSION['title'] = 'Accueil';
        $_SESSION['name'] = $this->getName($_POST['username']);
        $itemList = $this->item->getAllItems();
        $vue = new Vue('MainPage');
        $vue->generate(array('title'=>$this->titleArray, 'itemList'=>$itemList));

    }

    public function getName(string $username): string
    {
        $usernameArray = array($username);
        $UserInSession = new User();
        $nameUser = $UserInSession->getName($usernameArray);
        return $nameUser[0];
    }

    public function getTitlePage(): string
    {
        $titleMainPage = $this->titlePage;
        return $titleMainPage;
    }

    public function setStateOfStock(): void
    {
        $itemList = $this->item->getAllItems();
        foreach ($itemList as $OneItem) 
        {
            $stockDiff = intval(($OneItem['stockI'] * 100) / $OneItem['initStock']);
            $intId = $OneItem['id'];

            if ($stockDiff < 100 && $stockDiff > 50) {
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




}