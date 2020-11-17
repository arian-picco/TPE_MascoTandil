<?php


Class CommentsModel {
    private $db;
    function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

  
    function getComments(){
        $sentencia = $this->db->prepare("SELECT * FROM comments");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getCommentsOfaProduct($id_product){
        $sentencia = $this->db->prepare("SELECT comment, score, id_user, id_product FROM comments JOIN products on products.id = comments.id_product WHERE products.id = ?");
        $sentencia->execute(array($id_product));
        return $commentsOfAProduct = $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getCommentById($idComment){
        $sentencia = $this->db->prepare("SELECT comment, score, id_user, id_product FROM comments JOIN products on products.id = comments.id_product WHERE comments.id = ?");
        $sentencia->execute(array($idComment));
        return $commentsOfAProduct = $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function deleteComment($id_comment){
        $sentencia = $this->db->prepare("DELETE FROM comments WHERE id=?");
        $sentencia->execute(array($id_comment));
    }

    function insertComment($comment,$score,$id_product,$id_user){ 
        $sentencia = $this->db->prepare("INSERT INTO comments(comment,score,id_product,id_user) VALUES(?,?,?,?)");
        $sentencia->execute(array($comment,$score,$id_product,$id_user));
        return $this->db->lastInsertId();
    }


  

}

?>