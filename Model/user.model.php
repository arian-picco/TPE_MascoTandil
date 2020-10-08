<?php

Class UserModel {
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }


    function getUserByMail($email) {
        $sentencia = $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $sentencia->execute(array($email));
        return $selectedUser = $sentencia->fetch(PDO::FETCH_OBJ);
    }

    
}
