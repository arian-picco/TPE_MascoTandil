<?php

include_once 'Views/main.view.php';

Class LoginController{

    private $view;

    function __construct() {
        $this->view = new MainView();
    }

    function showLogin(){
        $this->view->showLogin();
    }

    function loginUser(){
        
        
  
        
    }

}