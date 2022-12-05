<?php

class persona{

    public $nombre; //Propiedades
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){

        $this->nombre=$nuevoNombre;

    }

    public function asignarNombre($nuevoNombre){  //Con function se crean acciones o metodos

        $this ->nombre=$nuevoNombre;
    
    }
    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){

        $this->edad=20;
        return $this->edad;

    }
}

$objAlumno = new persona("Oscar Uh"); //Con new estamos creando un nuevo objeto a partir de la definicion de una clalse (instancia o creacion de un objeto)
//$objAlumno->asignarNombre("Oscar"); //Llamamos al metodo
$objAlumno->imprimirNombre(); //Llamando al metodo

?>