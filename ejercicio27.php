<?php

class unaClase{

public static function unMetodo(){

    echo "Hola soy un método estatico </br>";

}

}

$objeto = new unaClase();
$objeto->unMetodo();

unaClase::unMetodo();

?>