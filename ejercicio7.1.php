<?php 
if($_POST){

    $edad = $_POST['txtEdad'];
    $nombre = $_POST['txtNombre'];
    $puesto= $_POST['txtPuesto'];

    echo $nombre." tiene ".$edad. " años y su puesto es ".$puesto;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio7.1.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
</br>
    Edad:
    <input type="text" name="txtEdad" id="">
</br>
    Puesto:
    <input type="text" name="txtPuesto" id="">
</br>
    <input type="submit" value="Enviar">


    </form>
</body>
</html>