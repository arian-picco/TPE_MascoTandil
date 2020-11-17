<?php

require_once "api/api.view.php";

abstract Class ApiController {

    protected $model;
    protected $view;

    private $data;

    public function __construct(){
    $this->view = new ApiView();
    //toma el input - sea armado con postman o mediante un form.
    $this->data = file_get_contents("php://input");
    }

    //lee la variable asociada a la entrada estandar y la convierte en json
    //hace decode el json del input
    function getData(){
        return json_decode(($this->data));
    }

}