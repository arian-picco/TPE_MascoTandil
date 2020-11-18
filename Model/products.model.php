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

    //crear una consulta que traiga los 3 primeros elementos

    // boton siguitente / store?page=4  / en misma query limitar 

    //https://www.w3schools.com/php/php_mysql_select_limit.asp

    //investigar OFSET y Limit 

    //se envia el limit y el offset pasarlo por paramtro - El offset es el número de página ES MULTIPLICANDO

    //buscar la relacion entre el numero de pagina y el offset - para adelante es multiplicar y para atrás dividis.

    //1x0

    //unir con el controller

    //Hacerlo con siguiente//anterior

    //sacar la cuenta ofset = p*2 -2

    function getProductDetail($productDetail){
        $sentencia = $this->db->prepare("SELECT products.id,products.name,
        products.description,products.price, products.id_category, categories.category_name as cat_name FROM
        products inner JOIN categories ON products.id_category = categories.id where products.id = ?");
        $sentencia->execute(array($productDetail));
        return $productDetail = $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

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