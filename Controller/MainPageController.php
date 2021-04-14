<?php

require_once 'Model/User.php';
require_once 'Vue/Vue.php';

class MainPageController {

    private ?string $nameUser = null;
    private string $titlePage = 'Accueil';
    private  $titleArray = array('title'=>'Accueil');


    public function mainPageVue(string $title) 
    {
        session_start();
        $_SESSION['title'] = 'Accueil';
        $_SESSION['name'] = $this->getName($_POST['username']);
        $vue = new Vue('MainPage');
        $vue->generate(array('title'=>$this->titleArray, 'nameUser'=>$this->nameUser));

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




}