<?php

include_once("controllers/controller.php");
include_once("models/agregarRecetaModel.php");

class agregarRecetaController extends controller
{

    public function procesar($accion)
    {
        switch ($accion) {
            case "agregar":
                $this->agregar();
                break;
            default:
                $this->cargar();
                break;
        }
    }

    private function cargar()
    {
        include_once("views/agregar_receta.php");
    }

    private function agregar()
    {
        $titulo = $_POST['title'];
        $descripcion = $_POST['description'];
        $ingredientes = $_POST["ingredients"] = explode(",", $_POST["ingredients"]);
        $instrucciones = $_POST["instructions"] = explode("\n", $_POST["instructions"]);
        $imagen = $_POST['image_url'];

        $receta = array(
            "id" => uniqid(),
            "title" => $titulo,
            "description" => $descripcion,
            "ingredients" => $ingredientes,
            "instructions" => $instrucciones,
            "imagen" => $imagen
        );

        $agregar_receta = new agregarRecetaModel("datos.json");

        $agregar_receta->guardarReceta($receta);

        $recetas = $agregar_receta->cargarRecetas();

        header("Location: index.php?ruta=recetas");
    }
}
