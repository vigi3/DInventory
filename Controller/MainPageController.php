<?php

require_once 'Model/User.php';
require_once 'Vue/Vue.php';

class MainPageController {




    public function mainPageVue(string $title) 
    {
        $vue = new Vue('MainPage');
        $vue->generate(array('title'=>$title));
    }




}