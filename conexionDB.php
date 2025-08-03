<?php

// TODO: Conexiones a bases de datos relacionales

$server = "localhost"; // 127.0.0.1
$user = "root";
$password = "";

try {
    $conection = new PDO("mysql:host=$server;dbname=album_db", $user, $password);
    $conection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `url`) VALUES (NULL, 'viaje a barranquilla', 'memory_baranquilla.jpg')";

    $conection -> exec($sql);

    echo "Conexion a la base de datos establecida";

} catch(PDOException $error) {
    echo "Error de conexion a la base de datos: <br/>".$error;
}

?>