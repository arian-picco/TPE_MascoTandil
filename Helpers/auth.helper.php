<?php


class AuthHelper {

    function __construct() {} 


    function logOutUser(){
        session_start();
        session_destroy();
        header("Location: " .BASE_URL . 'home');
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['EMAIL'])){
            return false;
        }else {  
             return true;
         }
    }
    
    function login($user){
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['EMAIL_USER'] = $user->email;
        $_SESSION['USER_NAME'] = $user->name;
    }


}