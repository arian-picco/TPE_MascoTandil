<?php


class AuthHelper {


    static function logOutUser(){
        self::start();
        session_destroy();
    }
    
//sigleton

// metodos staticos, todos los controllers lo usan.
// Tanto un controller como el otro puede usarlo y ver la unica instancia que tiene

    static function checkLoggedIn(){
        self::start();
        if(!isset($_SESSION['USER_NAME'])){
            return false;
        }else {  
             return true;
         }
    }

    static function checkAdmin(){
        self::start();
        if($_SESSION['IS_ADMIN'] == 1) {
            return true;
        } else {
            return false;
        }
    }

// checkea si tenes una sesion activa.
    static private function start() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }
    
    static function login($user){
        self::start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['EMAIL_USER'] = $user->email;
        $_SESSION['USER_NAME'] = $user->name;
        $_SESSION['IS_ADMIN'] = $user->admin;
    }


}