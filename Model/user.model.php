<?php


Class CategoriesModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }


    function getProductByCategory($categorySelected){
        $sentencia = $this->db->prepare( "SELECT products.id,products.name,products.description,products.price, categories.category_name FROM
        products inner JOIN categories ON products.id_category = categories.id where id_category = ?");
        $sentencia->execute(array($categorySelected));
        return $productsByCatogory = $sentencia->fetchAll(PDO::FETCH_OBJ);
        var_dump($productsByCatogory);
    }

    

}
