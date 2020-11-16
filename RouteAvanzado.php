<?php
    require_once 'Controller/home.controller.php';
    require_once 'Controller/usersHandler.controller.php';
    require_once 'Controller/store.controller.php';
    require_once 'Controller/auth.controller.php';
    require_once 'Controller/categories.controller.php';
    require_once 'Model/products.model.php';
    require_once 'Model/categories.model.php';
    require_once 'libs/Router.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();

    // rutas - 
    $r->addRoute("admin", "GET", "AuthController", "showLogin");
    $r->addRoute("verify_user", "POST", "AuthController", "loginUser");
    $r->addRoute("registration_form", "GET", "AuthController", "showRegistrationPage");
    $r->addRoute("register", "POST", "AuthController", "registerUser");
    $r->addRoute("edit_users", "GET", "UserHandlerController", "showUserEditionPanel");
    $r->addRoute("logout", "GET", "AuthController", "logOutUser");

    $r->addRoute("home", "GET", "HomeController", "showHome");
   
    $r->addRoute("store", "GET", "StoreController", "showProducts");
    $r->addRoute("category/:ID", "GET", "StoreController", "showProductByCategory");
    $r->addRoute("detail/:ID", "GET", "StoreController", "showProductDetail");
    $r->addRoute("insert", "POST", "StoreController", "insertProduct");
    $r->addRoute("delete/:ID", "GET", "StoreController", "DeleteProduct");
    $r->addRoute("update/:ID", "GET", "StoreController", "updateProduct");

    $r->addRoute("category_edition", "GET", "CategoriesController", "updateProduct");
    $r->addRoute("updateCategories", "GET", "CategoriesController", "updateCategories");
    $r->addRoute("insertCategory", "POST", "CategoriesController", "insertCategory");
    $r->addRoute("deleteCategory/:ID", "GET", "CategoriesController", "deleteCategory");


    //Ruta por defecto.
    $r->setDefaultRoute("HomeController", "showHome");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>