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
    $r->addRoute("login", "GET", "AuthController", "showLogin");
    $r->addRoute("verify_user", "POST", "AuthController", "loginUser");
    $r->addRoute("registration_form", "GET", "AuthController", "showRegistrationPage");
    $r->addRoute("register", "POST", "AuthController", "registerUser");
    $r->addRoute("edit_users", "GET", "UserHandlerController", "showUserEditionPanel");
    $r->addRoute("logout", "GET", "AuthController", "logOutUser");
    $r->addRoute("grantAdmin/:ID", "GET", "UserHandlerController", "grantPermissions");
    $r->addRoute("quitAdmin/:ID", "GET", "UserHandlerController", "removePermissions");
    $r->addRoute("deleteUser/:ID", "GET", "UserHandlerController", "deleteUser");

    $r->addRoute("home", "GET", "HomeController", "showHome");
   
    $r->addRoute("store", "GET", "StoreController", "showProducts");
    $r->addRoute("store/:byScore", "GET", "StoreController", "showProducts");
    $r->addRoute("store/:orderASC", "GET", "StoreController", "showProducts");
    $r->addRoute("store/:orderDESC", "GET", "StoreController", "showProducts");

    $r->addRoute("category/:ID", "GET", "StoreController", "showProductByCategory");
    $r->addRoute("detail/:ID", "GET", "StoreController", "showProductDetail");
    $r->addRoute("insert", "POST", "StoreController", "insertProduct");
    $r->addRoute("delete/:ID", "GET", "StoreController", "DeleteProduct");
    $r->addRoute("update/:ID", "POST", "StoreController", "updateProduct");

    $r->addRoute("category_edition", "GET", "CategoriesController", "showCategoryEditionPanel");
    $r->addRoute("updateCategories", "POST", "CategoriesController", "updateCategories");
    $r->addRoute("insertCategory", "POST", "CategoriesController", "insertCategory");
    $r->addRoute("deleteCategory/:ID", "GET", "CategoriesController", "deleteCategory");


    //Ruta por defecto.
    $r->setDefaultRoute("HomeController", "showHome");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>