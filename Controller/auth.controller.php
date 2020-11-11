<?php

include_once 'Views/auth.view.php';
include_once 'Model/user.model.php';

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
                session_start();
                $_SESSION['ID_USER'] = $user->id;
                $_SESSION['EMAIL_USER'] = $user->email;
                $_SESSION['USER_NAME'] = $user->name;
                //redirigimos a la home
                header("Location: " . BASE_URL . "home"); 
                
            } else {
                //envio por parametro el error a la vista.
                $this->view->showLogin("Credenciales inválidas - Ingrese los datos nuevamente");
            }
    }

    function logOutUser(){
        session_start();
        session_destroy();
        header("Location: " .BASE_URL . 'home');
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['EMAIL'])){
            return false;
        }else return true;
    }
    


}