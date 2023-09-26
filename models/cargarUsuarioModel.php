<?php

class cargarUsuarioModel
{

    private $data; 

    public function __construct($datos) {
        
        $this->data = json_decode(file_get_contents($datos), true);
    }

    public function cargarUsuario() {
        $usuario = $this->data['users'][($_GET['user_id']-1)];
        return $usuario;
    }


}