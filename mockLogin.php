<?php

// ? Sirve para mantener informcion en cualquier 
// ? pagina mientras el navegador este abierto

// ! Incluso es posible leer las variables dentro de un
// ! archivo diferente, gracias a SESSION

session_start();

$_SESSION["usuario"]="changodrillo";
$_SESSION["status"]="logueado";

echo "Sesion iniciada <br/>";
echo "Usuario: ".$_SESSION["usuario"]." -> Estatus: ".$_SESSION["status"];


?>