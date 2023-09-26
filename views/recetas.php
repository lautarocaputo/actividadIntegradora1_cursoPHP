
<?php

if(isset($_POST)){
    ?> <div class="receta-container">

    <?php foreach ($recetas as $receta) : ?>
        <a href="index.php?ruta=recetas&accion=ver&id=<?php echo $receta["id"] ?>">
            <div class="receta">
                <h1><?= $receta["title"]; ?></h2>
                <img src="<?= $receta["imagen"]; ?>" alt="<?= $receta["title"]; ?>">
            </div>
        </a>
    <?php endforeach; ?>

</div><?php
}

?>
