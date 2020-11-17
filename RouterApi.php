<?php
require_once 'libs/Router.php';
require_once 'api/api-comments.controller.php';

//Creo el router
$router = new Router();

//armo la tabla de ruteo
$router->addRoute('detail/:ID','GET','ApiCommentsController','getCommentsOfaProduct');
$router->addRoute('detail/:ID','DELETE','ApiCommentsController','deleteComment');
$router->addRoute('detail/:ID','POST','ApiCommentsController','insertComment');

//run - rutea - va resource porqué es el de la API
$router->route($_REQUEST['resource'],  $_SERVER['REQUEST_METHOD']);

?>