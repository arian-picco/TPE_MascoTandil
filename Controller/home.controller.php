<?php

include_once 'Views/main.view.php';
include_once 'Helpers/auth.helper.php';

Class HomeController{
    private $view;


    function __construct() {
        $this->view = new MainView(); 
       }

    function showHome(){

       $loggedIn =  AuthHelper::checkLoggedIn();
        if($loggedIn){
            $this->view->showHome();
        }  else {
            $this->view->showHome();
        }
    }


    
}