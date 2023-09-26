<?php

include_once("controllers/controller.php");
include_once("models/cerrarSesionModel.php");

class cerrarSesionController extends controller
{

    public function procesar($accion)
    {
        switch ($accion) {
            case "":
                $this->cerrarSesion();
                break;
            default:
                $this->cerrarSesion();
                break;
        }
    }

    private function cerrarSesion()
    {
        $model = new cerrarSesionModel();
        $cerrarSesion = $model->cerrarSesion();
    }

}