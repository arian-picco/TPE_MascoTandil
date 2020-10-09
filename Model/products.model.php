<?php


Class ProductsModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }


    function getProducts(){
        $sentencia = $this->db->prepare( "SELECT products.id,products.name,
        products.description,products.price, products.id_category as cat_id, categories.category_name as cat_name FROM
        products inner JOIN categories ON products.id_category = categories.id");
        $sentencia->execute();
        return $products = $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //hacer un join y después imprimir en la tabla
    function getProductDetail($productDetail){
        $sentencia = $this->db->prepare("SELECT products.id,products.name,
        products.description,products.price, products.id_category, categories.category_name as cat_name FROM
        products inner JOIN categories ON products.id_category = categories.id where products.id = ?");
        $sentencia->execute(array($productDetail));
        return $productDetail = $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //seleccionar todos los datos de ambas tablas donde el category id sea igual y el id sea igual al input
  


    function DeleteProduct($product_id){
        $sentencia = $this->db->prepare( "DELETE FROM products WHERE id=?");
        $sentencia->execute(array($product_id));
    }

    function InsertProduct($name,$description,$price,$id_category){
        $sentencia = $this->db->prepare("INSERT INTO products(name, description, price, id_category) VALUES(?,?,?,?)");
        $sentencia->execute(array($name,$description,$price,$id_category));
    }

    function updateProduct($name,$description,$price,$id_category,$id){   
        $sentencia = $this->db->prepare("UPDATE products SET name=?, description=?, price=?, id_category=? WHERE id=?");
        $sentencia->execute(array($name,$description,$price,$id_category,$id));
      }

}




?>