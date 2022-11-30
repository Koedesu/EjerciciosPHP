<?php 

$frutas = array("f"=>"Fresa","m"=>"Manzana","p"=>"Pera");
print_r($frutas);

echo $frutas["f"]."</br>";

foreach($frutas as $indice=>$valor){

    echo "El valor ".$valor." Tiene el indice ".$indice."</br>";

}



?>