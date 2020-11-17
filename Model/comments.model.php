<?php


Class CommentsModel {
    private $db;
    function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

}

function getComments(){
    $sentencia = $this->db->prepare("SELECT * FROM comments");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function getComment($id_comment){
    $sentencia = $this->db->prepare("SELECT * FROM comments WHERE id=?");
    $sentencia->execute(array($id_comment));
    return $sentencia->fetch(PDO::FETCH_OBJ);
}

function deleteComment($id_comment){
    $sentencia = $this->db->prepare("DELETE FROM comments WHERE id=?");
    $sentencia->execute(array($id_comment));
}

function insertComment($comment){
    $sentencia = $this->db->prepare("INSERT INTO comments(comment) VALUES(?)");
    $sentencia->execute(array($comment));
}

?>