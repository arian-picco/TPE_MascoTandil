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

    function deleteUser($user_id){
        $sentencia = $this->db->prepare( "DELETE FROM users WHERE id=?");
        $sentencia->execute(array($user_id));
    }

    function grantPermissions($user_id){
        $sentencia = $this->db->prepare( " UPDATE users SET admin = 1 WHERE id = ?");
        $sentencia->execute(array($user_id));
    }

    function removePermissions($user_id){
        $sentencia = $this->db->prepare( " UPDATE users SET admin = 0 WHERE id = ?");
        $sentencia->execute(array($user_id));
    }

}
