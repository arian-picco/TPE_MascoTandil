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
        $this->view->showLogin("Campos vacíos");
          die();
      }      
        
      //obtengo el user

       $user = $this->userModel->getUserByMail($email);

       //comparo con el objeto que traigo del modelo
      
       if($user && password_verify($password, $user->password)){

        //redirigimos a la home
        header("Location: " . BASE_URL); // le puedo agregar .home si quiero que entre desde login
        
       } else {
           //envio por parametro el error a la vista.
           $this->view->showLogin("Credenciales inválidas");
       }
     
    }



}