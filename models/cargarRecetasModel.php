<?php

class cargarRecetasModel
{

    private $data; 

    public function __construct($datos) {
        
        $this->data = json_decode(file_get_contents($datos), true);
    }

    public function cargarRecetas() {

        return $this->data["recipes"];
    }

    

}