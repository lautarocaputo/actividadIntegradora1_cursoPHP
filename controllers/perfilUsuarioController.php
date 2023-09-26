<?php

include_once("controllers/controller.php");
include_once("models/cargarUsuarioModel.php");

class perfilUsuarioController extends controller
{

    public function procesar($accion)
    {
        switch ($accion) {
            case "mostrarUsuario":
                $this->cargarDatos();
                break;
            default:
                $this->cargarDatos();
                break;
        }
    }

    private function cargarDatos()
    {
        $model = new cargarUsuarioModel("datos.json");
        $usuario = $model->cargarUsuario($_GET['user_id']);
        include_once("views/perfil_usuario.php");
    }

}
