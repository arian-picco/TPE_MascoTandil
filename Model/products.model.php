<?php


Class ProductsModel {
    private $db;
    function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getProducts(){
        $query = $this->db->prepare( "SELECT products.id,products.name, products.imagen as prodImg,
        products.description,products.price, products.id_category as cat_id, categories.category_name as cat_name
        FROM products inner JOIN categories ON products.id_category = categories.id ORDER BY products.id DESC ");
        $query->execute();
        return $products = $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getProductDetail($productSelected){
        $query = $this->db->prepare("SELECT products.id,products.name,
        products.description,products.price, products.id_category,
         categories.category_name as cat_name, products.imagen as prodImg FROM
        products inner JOIN categories ON products.id_category = categories.id where products.id = ?");
        $query->execute(array($productSelected));
        return $productDetail = $query->fetchAll(PDO::FETCH_OBJ);
    }

    function DeleteProduct($product_id){
        $query = $this->db->prepare( "DELETE FROM products WHERE id=?");
        $query->execute(array($product_id));
    }

    function InsertProduct($name,$description,$price,$id_category, $realPath){
        $query = $this->db->prepare("INSERT INTO products(name, description, price, id_category, imagen ) VALUES(?,?,?,?,?)");
        $query->execute(array($name,$description,$price,$id_category,$realPath));
        return $this->db->lastInsertId();
    }

    function updateProduct($name,$description,$price,$id_category,$id,$realPath){   
        $query = $this->db->prepare("UPDATE products SET name=?, description=?, price=?, id_category=?, imagen=? WHERE id=?");
        $query->execute(array($name,$description,$price,$id_category,$realPath,$id));
      }



    function getProductsByPrice($order){
        $query = $this->db->prepare( "SELECT products.id,products.name, products.imagen as prodImg,
        products.description,products.price, products.id_category as cat_id, categories.category_name as cat_name FROM
        products inner JOIN categories ON products.id_category = categories.id ORDER BY products.price $order");
        $query->execute(array($order));
        return $productsByPrice = $query->fetchAll(PDO::FETCH_OBJ);
    }

    //SUSPENDIDO
    // function getProductsByScore() {
    //     $query = $this->db->prepare("SELECT p.name, p.id as productId, p.imagen as prodImg,
    //      p.description, p.price,
    //      p.id_category, c.id, AVG(c.score), cat.category_name as cat_name, cat.id as cat_id
    //     FROM comments as c 
    //     INNER JOIN products as p
    //     ON c.id_product = p.id
    //     INNER JOIN categories as cat 
    //     ON p.id_category = cat.id
    //     GROUP BY c.id
    //     ORDER BY AVG(c.score)");
    //     $query->execute();
    //     return $productsByScore = $query->fetchAll(PDO::FETCH_OBJ);
    // }



    function getProductsBySearch($minPrice = null,$maxPrice = null,$search = null){
        $inputQuery ="SELECT products.id,products.name, products.imagen as prodImg,
        products.description,products.price, products.id_category as cat_id, categories.category_name as cat_name
        FROM products inner JOIN categories ON products.id_category = categories.id WHERE 1";
        $array = [];
        if(isset($minPrice) && $minPrice>0){
           $inputQuery .= " AND products.price > ?";
           $array[] = $minPrice;
        } 
        if (isset($maxPrice) && $maxPrice>0){
            $array[] = $maxPrice;
           $inputQuery .= " AND products.price < ?";
        } if  (isset($search) && $search != '') {
            $array[] = '%'.$search.'%';
            $inputQuery .= " AND products.name LIKE ?";
        } 
        $query = $this->db->prepare($inputQuery);  
        $query->execute($array);
        return $productsBySearch = $query->fetchAll(PDO::FETCH_OBJ); 
        }

    }


   //Notas para Paginado

   
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

    // function getProductsPerPage($productsAmount, $offset){
    //     $query = $this->db->prepare( "SELECT products.id,products.name, products.imagen as prodImg, products.description,products.price, products.id_category as cat_id, categories.category_name as cat_name FROM products
    //      inner JOIN categories ON products.id_category = categories.id ORDER BY products.id DESC LIMIT $productsAmount OFFSET $offset");
    //     $query->execute(array($productsAmount,$offset));       
    //     return $productsToDisplay = $query->fetchAll(PDO::FETCH_OBJ);
    // }

?>

