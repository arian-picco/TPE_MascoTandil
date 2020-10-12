<?php

include_once 'Views/main.view.php';
include_once 'Views/public.view.php';
include_once 'Controller/auth.controller.php';

Class HomeController{

    private $view;
    private $publicView;
    private $authController;

    function __construct() {
        $this->view = new MainView();
        $this->publicView = new PublicView();
        $this->authController = new AuthController();
    }

    function showHome(){

        $loggeado = $this->checkLoggedIn();
        if($loggeado){
            $this->view->showHome();
            var_dump($loggeado);
        } else {
           $this->publicView->showPublicHome();
           var_dump($loggeado);
        }
     
    }


    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['EMAIL'])){
            return false;
        }else return true;
    }
    
}