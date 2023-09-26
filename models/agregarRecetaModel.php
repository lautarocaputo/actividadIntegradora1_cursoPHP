<?php

class agregarRecetaModel
{

    private $data; 

    public function __construct($datos) {
        
        $this->data = json_decode(file_get_contents($datos), true);
    }

    public function cargarRecetas() {
        return $this->data["recipes"];
    }

    public function guardarReceta($receta) {
        $this->data["recipes"][] = $receta;
        file_put_contents("datos.json", json_encode($this->data));
    }


}