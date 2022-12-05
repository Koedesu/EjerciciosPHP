<?php

class persona{

    public $nombre; //Propiedades
    private $edad;
    protected $altura;

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

$objAlumno = new persona(); //Con new estamos creando un nuevo objeto a partir de la definicion de una clalse (instancia o creacion de un objeto)
$objAlumno->asignarNombre("Oscar"); //Llamamos al metodo

$objAlumno2=new persona();
$objAlumno2->asignarNombre("Monica");
$objAlumno2->imprimirNombre();

echo $objAlumno->nombre;  //Imprimimos una propiedad
echo $objAlumno2->nombre;

echo $objAlumno2->mostrarEdad();

?>