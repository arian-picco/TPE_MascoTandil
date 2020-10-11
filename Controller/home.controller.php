<?php

include_once 'Views/main.view.php';

Class HomeController{

    private $view;

    function __construct() {
        
        $this->view = new MainView();
    }

    function showHome(){
        // session_start();
        // var_dump($_SESSION);

        //verificar que el usuario esté loggeado
        $this->checkLogged();

        $this->view->showHome();
    }

    function showStore(){

        $this->checkLogged();
        
        $this->view->showStore();
    }

    //barrera de seguridad para el usuario loggeado
    function checkLogged(){
        session_start();
        if(!isset($_SESSION['ID_USER'])){
            header("Location: " . BASE_URL . "admin");
            die();
        }
    }

    
}