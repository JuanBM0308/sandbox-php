<?php

    if ($_POST) {
        // Recibir info del formulario HTML -> POST
        $nombre = $_POST['txtNombre'];
        echo "Bienvenido, ".$nombre;
    } else {
        echo "PHP developer was born :D";
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2 PHP</title>
</head>
<body>

    <form action="ejemplo2.php" method="post">
        <div>
            <h2>Nombre:</h2>
            <input type="text" name="txtNombre" id="nombreUsuario">
        </div>
        <input type="submit" value="enviar">
    </form>

</body>
</html>