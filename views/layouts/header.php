<?php session_start(); ?>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php?ruta=recetas">Recetas</a></li>
            <li><a href="index.php?ruta=agregar_receta">Agregar receta</a></li>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <li><a href="index.php?ruta=perfil_usuario&accion=mostrarUsuario&user_id=<?php echo $_SESSION['user_id']; ?>">Perfil</a></li>
                <li>
                    <a href="index.php?ruta=cerrar_sesion">Cerrar sesión</a>
                </li>
                <?php endif; ?>
        </ul>
    </nav>
</header>