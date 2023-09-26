<?php
        // Verifica si se ha pasado una receta válida a la vista
        if (isset($receta)) {
            ?>
            <div class="recipe-details">
                <h2><?= $receta["title"]; ?></h2>
                <p class="recipe-description"><?= $receta["description"]; ?></p>
                <h3>Ingredientes:</h3>
                <ul class="recipe-ingredients">
                    <?php
                    foreach ($receta["ingredients"] as $ingredient) {
                        echo "<li>$ingredient</li>";
                    }
                    ?>
                </ul>
                <h3>Instrucciones:</h3>
                <ol class="recipe-instructions">
                    <?php
                    foreach ($receta["instructions"] as $instruction) {
                        echo "<li>$instruction</li>";
                    }
                    ?>
                </ol>
            </div>
            <?php
        } else {
            // Si no se pasa una receta válida, muestra un mensaje de error
            echo '<p class="error">No se encontró la receta solicitada.</p>';
        }
        ?>