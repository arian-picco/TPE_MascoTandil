<?php

include_once 'Views/auth.view.php';
include_once 'Model/user.model.php';

Class LoginController{

    private $view;
    private $userModel;

    function __construct() {
        $this->view = new AuthView();
        $this->userModel = new UserModel();
    }

    function showLogin(){
        $this->view->showLogin();
    }

    function loginUser(){
       $email = $_POST['input_email'];
       $password = $_POST['input_password'];
       $name = $_POST['input_name']; 
      if(empty($email) || empty($password) || empty($name) ){
        //   $this->view->showError('Faltan datos');
          die();
      }      
        $user = $this->userModel->getUserByMail($email);

       //comparto con el objeto que traigo del modelo

       if($user && password_verify($password, $user->password)){
           echo "acceso exitoso";
       } else {
           echo "acceso denegado";
       }
     
    }



}