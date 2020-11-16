<?php

include_once 'Views/usersHandler.view.php';
include_once 'Model/user.model.php';
include_once 'Helpers/auth.helper.php';

Class UserHandlerController{

    private $view;
 
    function __construct() {
        $this->view = new UserHandlerView();
        $this->userModel = new UserModel();
    }
   


    function showUserEditionPanel(){
        $users = $this->userModel->getAllUsers();
        $loggedIn =  AuthHelper::checkLoggedIn();
        $isAdmin = AuthHelper::checkAdmin();
        if($loggedIn && $isAdmin){
            $this->view->showUserEditionPanel($users);
        } else {
            header("Location:  " .  BASE_URL . "store");
        }
    }
   


}