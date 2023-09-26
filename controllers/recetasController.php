<?php

include_once("controllers/controller.php");
include_once("models/cargarRecetasModel.php");

class recetasController extends controller
{

    public function procesar($accion)
    {
        switch ($accion) {
            case "ver":
                $this->ver($_GET["id"]);
                break;
            case "":
                $this->cargar();
                break;
            default:
                $this->cargar();
                break;
        }
    }

    private function cargar()
    {
        $carga_recetas = new cargarRecetasModel("datos.json");
        $recetas = $carga_recetas->cargarRecetas();

        include_once("views/recetas.php");
    }

    private function ver($id)
    {
        $carga_recetas = new cargarRecetasModel("datos.json");
        $recetas = $carga_recetas->cargarRecetas();

        $receta = null;
        foreach ($recetas as $receta) {
            if ($receta["id"] == $id) {
                $receta = $receta;
                break;
            }
        }

        include_once("views/ver_receta.php");
    }
}
