<h1>Agregar nueva receta</h1>
<div class="agregar-receta-form">
    <form action="index.php?ruta=agregar_receta&accion=agregar" method="POST">
        <label for="title">Título de la Receta:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Descripción:</label>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="ingredients">Ingredientes (separados por comas):</label>
        <input type="text" id="ingredients" name="ingredients" required><br><br>

        <label for="instructions">Instrucciones (una por línea):</label>
        <textarea id="instructions" name="instructions" rows="4" required></textarea><br><br>

        <label for="image_url">URL de la Imagen:</label>
        <input type="url" id="image_url" name="image_url" required><br><br>

        <input type="submit" value="Guardar Receta">
    </form>
</div>