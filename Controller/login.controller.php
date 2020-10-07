<?php

include_once 'Views/main.view.php';
include_once 'Model/user.model.php';

Class LoginController{

    private $view;
    private $model;

    function __construct() {
        $this->view = new MainView();
        $this->model = new UserModel();
    }

    function showLogin(){
        $this->view->showLogin();
    }

    function loginUser(){
       $email = $_POST['input_email'];
       $password = $_POST['input_password'];
       $name = $_POST['input_name']; 
      if(empty($email) || empty($password) || empty($name) ){
          die();
      }      
        $user = $this->model->getUserByMail($email);
        var_dump($user);
     
    }



}