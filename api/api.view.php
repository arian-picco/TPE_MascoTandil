<?php

class APIview{

    //tiene dos funciones, manejar el codigo de respuesta y devolver json

    public function response($data, $status){
        header("Content-Type: application/json");
        //para setear el código de respuesta 
        header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
        // aca vamos a convertir a json
        echo json_encode($data);
    }


    private function _requestStatus($code){
        $status = array (
            200 => "OK",
            201 => "Created",
            400 => "Not Found",
            500 => "Internal Server Error"
        );
        return (isset($status[$code]))? $status[$code] : $status[500];
    }


}