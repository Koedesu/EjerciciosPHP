<?php
if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    //OPERADOR AND
    //if ( ($valorA != $valorB) && ($valorA > $valorB) ){
      //  echo "El valor de A es diferente y mayor al valor de B";
    //}

    //OPERADOR OR
    if ( ($valorA != $valorB) || ($valorA > $valorB) ){
        echo "Se cumplen los requisitos.";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        valor A:
        <input type="text" name="valorA" id="">
</br>
        valor B:
        <input type="text" name="valorB" id="">
</br>   
        <input type="submit" value="Calcular">

    </form>
</body>
</html>