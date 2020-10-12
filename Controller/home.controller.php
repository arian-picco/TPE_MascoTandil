<?php

include_once 'Views/main.view.php';
include_once 'Views/public.view.php';

Class HomeController{
    private $publicView;
    private $view;

    function __construct() {
        $this->view = new MainView(); 
        $this->publicView = new PublicView(); 
       }

    function showHome(){
        $loggedIn = $this->checkLoggedIn();
        if($loggedIn){
            $this->view->showHome();
        } else {
        $this->publicView->showPublicHome();
        }
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['EMAIL_USER'])){
            return false;
        } else return true;
    }
 
    
}