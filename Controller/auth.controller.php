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

    function showRegistrationPage(){
        $this->view->showRegistrationPage();
    }

    function loginUser(){
        $email = $_POST['input_email'];
        $password = $_POST['input_password'];
        $name = $_POST['input_name']; 

        if(empty($email) || empty($password) || empty($name) ){
            $this->view->showLogin("Campos vacíos - Por favor complete el formulario y vuelva a intentar");
            die();
        }
        $user = $this->userModel->getUserByMail($email);
         if($user && password_verify($password, $user->password) && ($email == $user->email)){
                var_dump($user);
                AuthHelper::login($user);
                header("Location: " . BASE_URL . "home");               
            } else {
                $this->view->showLogin("Credenciales inválidas - Ingrese los datos nuevamente");
        }
    }

    function registerUser(){
        $email = $_POST['input_email'];
        $password = $_POST['input_password'];
        $passwordConfirm = $_POST['confirm_password'];
        $name = $_POST['input_name']; 
        $admin = 0;
        if(empty($email) || empty($password) || empty($name) ){
            $this->view->showRegistrationPage("Campos vacíos - Por favor complete el formulario y vuelva a intentar");
            die();
        } else if ($password != $passwordConfirm){
            $this->view->showRegistrationPage("Verifique la confirmación de contraseña y vuelva a intentar");
            die();
        }   
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $userId = $this->userModel->insertNewUser($email,$hash,$name,$admin);
        $user = $this->userModel->getUserByiD($userId);
        AuthHelper::login($user);
        header("Location: " . BASE_URL . "home"); 
    }

    function logOutUser(){
        AuthHelper::logOutUser();
        header("Location: " .BASE_URL . 'home');
    }
    


}