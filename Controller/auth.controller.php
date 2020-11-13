<?php

include_once 'Views/auth.view.php';
include_once 'Model/user.model.php';
include_once 'Helpers/auth.helper.php';


Class AuthController{

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
            $this->view->showLogin("Campos vacíos - Por favor complete el formulario y vuelva a intentar");
            die();
        }      
            
        //obtengo el user
        $user = $this->userModel->getUserByMail($email);
        //comparo con el objeto que traigo del modelo
        if($user && password_verify($password, $user->password) && ($user->name === 'Administrador')){
                //armo la sesion del usuario
                AuthHelper::login($user);
                header("Location: " . BASE_URL . "home");               
            } else {
                //envio por parametro el error a la vista.
                $this->view->showLogin("Credenciales inválidas - Ingrese los datos nuevamente");
            }
    }

    function logOutUser(){
        AuthHelper::logOutUser();
        header("Location: " .BASE_URL . 'home');
    }
    


}