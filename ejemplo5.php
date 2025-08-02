<?php

    if ($_POST) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        // Concatenacion de Strings
        echo "Hola ".$nombre." ".$apellido;
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 5</title>
</head>
<body>
    
    <form action="ejemplo5.php" method="post">
        <div>
            <h2>Nombre:</h2>
            <input type="text" name="nombre" id="nombreUsuario">
        </div>
        <div>
            <h2>Apellido:</h2>
            <input type="text" name="apellido" id="apellidoUsuario">
        </div>
        <input type="submit" value="enviar">
    </form>

</body>
</html>