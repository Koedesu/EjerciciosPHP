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

class trabajador extends persona{

    public $puesto;
    
    public function presentarComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }

}  

$objAlumno = new persona(); //Con new estamos creando un nuevo objeto a partir de la definicion de una clalse (instancia o creacion de un objeto)
$objAlumno->asignarNombre("Oscar"); //Llamamos al metodo

$objTrabajador = new trabajador();
$objTrabajador -> asignarNombre("Oscar Uh ");
$objTrabajador-> puesto="Profesor";

$objTrabajador->presentarComoTrabajador();

?>