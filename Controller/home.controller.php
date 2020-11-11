<?php

include_once 'Views/main.view.php';
include_once 'Views/public.view.php';
include_once 'Helpers/auth.helper.php';

Class HomeController{
    private $publicView;
    private $view;
    private $helper;

    function __construct() {
        $this->view = new MainView(); 
        $this->publicView = new PublicView(); 
        // $this->helper = new AuthHelper();

       }

    function showHome(){
        // $loggedIn = $this->helper->checkLoggedIn();
        // $loggedIn = $this->checkLoggedIn();
       $loggedIn =  AuthHelper::checkLoggedIn();
        if($loggedIn){
            $this->view->showHome();
        } else {
        $this->publicView->showPublicHome();
        }
    }

    // function checkLoggedIn(){
    //     session_start();
    //     if(!isset($_SESSION['EMAIL_USER'])){
    //         return false;
    //     } else return true;
    // }
 
    
}