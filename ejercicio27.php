<?php

class unaClase{

public static function unMetodo(){

    echo "Hola soy un metodo estatico </br>";

}

}

$objeto = new unaClase();
$objeto->unMetodo();

unaClase::unMetodo();

?>