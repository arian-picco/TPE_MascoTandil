<?php

include_once 'Views/main.view.php';

Class HomeController{

    private $view;

    function __construct() {
        $this->view = new MainView();
    }

    function showHome(){
        $this->checkLogged();
        $this->view->showHome();
    }

    function checkLogged(){
        session_start();
        if(!isset($_SESSION['ID_USER'])){
            header("Location: " . BASE_URL . "admin");
            die();
        }
    }     
 
    
}