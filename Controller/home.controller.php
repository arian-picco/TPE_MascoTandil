<?php

include_once 'Views/main.view.php';

Class HomeController{

    private $view;

    function __construct() {
        $this->view = new MainView();
    }

    function showHome(){
        $this->view->showHome();
    }

    function showHairDressing(){
        $this->view->showHairDressing();
    }

    function showStore(){
        $this->view->showStore();
    }
}