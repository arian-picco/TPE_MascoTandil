<?php


Class CommentsModel {
    private $db;
    function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

}




?>