<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas Culinarias en Línea</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include_once "views/layouts/header.php";
    
     ?>
    <main>
        <?php
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit;
        }

        if (isset($_GET['ruta'])) {
            $ruta = $_GET['ruta'];
            if ($ruta === 'recetas') {
                include_once "controllers/recetasController.php";
                $demo = new recetasController();
                
                if(isset($_GET['accion'])){
                    $demo->procesar($_GET['accion']);
                }else{
                    $demo->procesar("");
                }
            }elseif ($ruta === 'agregar_receta') {
                include_once "controllers/agregarRecetaController.php";
                $demo = new agregarRecetaController();
                if(isset($_GET['accion'])){
                    $demo->procesar($_GET['accion']);
                }else{
                    $demo->procesar("");
                }
            }elseif ($ruta === 'perfil_usuario') {
                include_once "controllers/perfilUsuarioController.php";
                $demo = new perfilUsuarioController();
                if(isset($_GET['accion'])){
                    $demo->procesar($_GET['accion']);
                }else{
                    $demo->procesar("");
                }
            } elseif ($ruta === 'cerrar_sesion') {
                include_once "controllers/cerrarSesionController.php";
                $demo = new cerrarSesionController();
                if(isset($_GET['accion'])){
                    $demo->procesar($_GET['accion']);
                }else{
                    $demo->procesar("");
                }
            }else {
                include_once "views/404.php";
            }
        } else {
            include_once "views/home.php";
        }
        ?>
    </main>
    <?php include_once "views/layouts/footer.php"; ?>
</body>
</html>