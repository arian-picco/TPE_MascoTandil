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


    function deleteUser($params = null){
        $user_id = $params[':ID'];
        $loggedIn =  AuthHelper::checkLoggedIn(); 
        if(!$loggedIn){
            header("Location:  " .  BASE_URL . "store");
            }
            else {
                $this->userModel->deleteUser($user_id);
                $loggedIn =  AuthHelper::checkLoggedIn();
                header("Location:  " .  BASE_URL . "edit_users");
            }
    }

    function grantPermissions($params = null){
        $user_id = $params[':ID'];
        $loggedIn =  AuthHelper::checkLoggedIn(); 
        if(!$loggedIn){
            header("Location:  " .  BASE_URL . "edit_users");
            echo("NO FUNCIONO");
            }
            else {
                $this->userModel->grantPermissions($user_id);
                $loggedIn =  AuthHelper::checkLoggedIn();
                header("Location:  " .  BASE_URL . "edit_users");
            }
    }


    function removePermissions($params = null){
        $user_id = $params[':ID'];
        $loggedIn =  AuthHelper::checkLoggedIn(); 
        $isAdmin = AuthHelper::checkAdmin();
        if(!$loggedIn){
            header("Location:  " .  BASE_URL . "store");
            }
            else if ($isAdmin) {
                $this->userModel->removePermissions($user_id);
                AuthHelper::logOutUser();
                header("Location:  " .  BASE_URL . "store");
            } else {
                $loggedIn =  AuthHelper::checkLoggedIn();
                header("Location:  " .  BASE_URL . "edit_users");
            }
    }

   


}