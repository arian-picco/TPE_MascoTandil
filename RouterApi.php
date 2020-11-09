<?php
require_once 'libs/Router.php';
require_once 'api/api-task.controller.php';

//Creo el router
$router = new Router();

//armo la tabla de ruteo
$router->addRoute('tareas', 'GET', 'ApiTaskController', 'GetTasks');
$router->addRoute('tareas/:ID','GET','ApiTaskController','GetTask');
$router->addRoute('tareas/:ID','DELETE','ApiTaskController','DeteleTask');
$router->addRoute('tareas','POST','ApiTaskController','InsertTask');

$router->addRoute('tareas/:ID','PUT','ApiTaskController','UpdateTask');

//run - rutea - va resource porqué es el de la API
$router->route($_REQUEST['resource'],  $_SERVER['REQUEST_METHOD']);

?>