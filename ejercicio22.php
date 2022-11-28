<?php 

$frutas = array("f"=>"Fresa","m"=>"Manzana","p"=>"Pera");
print_r($frutas);

echo "</br".$frutas["f"];

for ($indice=0;$indice<3;$indice++){
    
    echo $frutas[$indice];
}

?>