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

    function getUserByiD($id) {
        $sentencia = $this->db->prepare('SELECT * FROM users WHERE id = ?');
        $sentencia->execute(array($id));
        return $newUser = $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getAllUsers(){
        $sentencia = $this->db->prepare('SELECT * FROM users');
        $sentencia->execute();
        return $users =  $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function insertNewUser($email,$hash,$name,$admin){
        $sentencia = $this->db->prepare("INSERT INTO users(name, email, password, admin) VALUES(?,?,?,?)");
        $sentencia->execute(array($name,$email,$hash,$admin));
         return $this->db->lastInsertId();
    }




}
