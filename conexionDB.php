<?php

// TODO: Conexiones a bases de datos relacionales

$server = "localhost"; // 127.0.0.1
$user = "root";
$password = "";

try {
    $conection = new PDO("mysql:host=$server;dbname=album_db", $user, $password);
    $conection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $sql = "INSERT INTO `fotos` (`id`, `nombre`, `url`) VALUES (NULL, 'viaje a barranquilla', 'memory_baranquilla.jpg')";
    $sql = "SELECT * FROM `fotos`";

    // ? Prepara la consulta
    $sentencia = $conection -> prepare($sql);

    // ? Ejecuta la consulta
    $sentencia -> execute();

    // ? Busca dentro de los resultados
    $resultado = $sentencia -> fetchAll();

    // ? Imprime los resultados
    //print_r($resultado);
    foreach($resultado as $foto) {
        print_r($foto);
    }

    echo "Conexion a la base de datos establecida";

} catch(PDOException $error) {
    echo "Error de conexion a la base de datos: <br/>".$error;
}

?>