<?php


Class CategoriesModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }


    function getProductByCategory($categorySelected){
        $sentencia = $this->db->prepare( "SELECT products.id,products.name,
        products.description,products.price, categories.category_name as cat_name FROM
        products inner JOIN categories ON products.id_category = categories.id where id_category = ?");
        $sentencia->execute(array($categorySelected));
        return $productsByCatogory = $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getCategories(){
        $sentencia = $this->db->prepare( "SELECT * from categories");
        $sentencia->execute();
        return $categories = $sentencia->fetchAll(PDO::FETCH_OBJ);
    }


    function deleteCategory($category_id){
        $sentencia = $this->db->prepare( "DELETE FROM categories WHERE id=?");
        $sentencia->execute(array($category_id));
    }

    function insertCategory($name){
        $sentencia = $this->db->prepare("INSERT INTO categories(category_name) VALUES(?)");
        $sentencia->execute(array($name));
    }

    function updateCategories($name,$category_id){   
        $sentencia = $this->db->prepare("UPDATE categories SET category_name=? WHERE id=?");
        $sentencia->execute(array($name,$category_id));
      }



}




?>