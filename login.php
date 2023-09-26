<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $data = json_decode(file_get_contents("datos.json"), true);

    $user = null;
    foreach ($data["users"] as $userData) {
        if ($userData["username"] === $username) {
            $user = $userData;
            break;
        }
    }

    if ($user && isset($user["password"]) && $user["password"] === $password) {
        session_start();
        $_SESSION["user_id"] = $user["id"];
        header("Location: index.php");
        exit;
    } else {
        $error_message = "Nombre de usuario o contraseña incorrectos.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    
    <main>
        <h1>Iniciar Sesión</h1>
        <div class="container">
            <?php
            if (isset($error_message)) {
                echo '<p class="error">' . $error_message . '</p>';
            }
            ?>
            <form method="POST" action="login.php">
                <label for="username">Nombre de Usuario:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Recetas Culinarias en Línea</p>
    </footer>
</body>

</html>