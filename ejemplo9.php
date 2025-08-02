<?php

if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    
    if ($valorA > $valorB) {
        echo $valorA." es mayor que ".$valorB;
    } else {
        echo $valorB." es mayor que ".$valorA;
    }
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
    <form action="ejemplo9.php" method="post">
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