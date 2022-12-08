<?php 

session_start();

$_SESSION["usuario"]="Koedesu";
$_SESSION["status"]="logueado";

echo "Session iniciada".":</br>";
echo "Usuario: ".$_SESSION["usuario"]." </br> Estatus: ".$_SESSION["status"];

?>