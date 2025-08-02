<?php

if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    echo "El resultado de la suma es: ".$valorA + $valorB."<br/>";
    echo "El resultado de la resta es: ".$valorA - $valorB."<br/>";
    echo "El resultado de la multiplicacion es: ".$valorA * $valorB."<br/>";
    echo "El resultado de la division es: ".$valorA / $valorB."<br/>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejemplo8.php" method="post">
        valor A:
        <input type="text" name="valorA" id="">
        <br/>
        valor B:
        <input type="text" name="valorB" id="">
        <br/>

        <input type="submit" value="calcular">
    </form>
</body>
</html>