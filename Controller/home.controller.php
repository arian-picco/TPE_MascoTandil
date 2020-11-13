<?php

include_once 'Views/main.view.php';
include_once 'Views/public.view.php';
include_once 'Helpers/auth.helper.php';

Class HomeController{
    private $publicView;
    private $view;


    function __construct() {
        $this->view = new MainView(); 
        $this->publicView = new PublicView(); 
        // $this->helper = new AuthHelper();

       }

    function showHome(){

       $loggedIn =  AuthHelper::checkLoggedIn();
        if($loggedIn){
            $this->view->showHome();
        } else {
        $this->publicView->showPublicHome();
        }
    }


    
}