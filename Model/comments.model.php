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
        $sentencia = $this->db->prepare("SELECT comments.id, comments.id_product, comments.comment, comments.id_user, users.name as username, users.email, products.name 
        FROM ((comments
        INNER JOIN products ON comments.id_product = products.id)
        INNER JOIN users ON comments.id_user = users.id) WHERE products.id = ?");
        $sentencia->execute(array($id_product));
        return $commentsOfAProduct = $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getCommentById($idComment){
        $sentencia = $this->db->prepare("SELECT comments.id, comments.id_product, comments.id_user, users.name, users.email, products.name 
        FROM ((comments
        INNER JOIN products ON comments.id_product = products.id)
        INNER JOIN users ON comments.id_user = users.id) WHERE comments.id = ?");
        $sentencia->execute(array($idComment));
        return $commentOfAProduct = $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function deleteComment($id_comment){
        $sentencia = $this->db->prepare("DELETE FROM comments WHERE id=?");
        $deteled = $sentencia->execute(array($id_comment));
        return $deteled;
    }

    function insertComment($comment,$score,$id_product,$id_user){ 
        $sentencia = $this->db->prepare("INSERT INTO comments(comment,score,id_product,id_user) VALUES(?,?,?,?)");
        $sentencia->execute(array($comment,$score,$id_product,$id_user));
        return $this->db->lastInsertId();
    }


  

}

?>