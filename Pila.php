<?php
class Stack{
    private $pila;

    public function __construct()
    {
        $this->pila = array();
    }

    public function push($value)
    {
        array_push($this->pila, $value);
    }

    public function pop()
    {
        return array_pop($this->pila);
    }

    public function count()
    {
        return count($this->pila);
    }

    public function valid()
    {
        return !empty($this->pila);
    }

    public function printPila()
    {
        foreach ($this->pila as $value) {
            echo $value . ' ';
        }
        echo "\n";
    }
}

//crea la pila
$Primerpila = new Stack();

//agrega elementos a la pila
$Primerpila->push('1');
$Primerpila->push('2');
$Primerpila->push('3');
$Primerpila->push('4');



//muestra el numero de los elementos
echo $Primerpila->count() . "\n";

//destruye el ultimo elemento de la pila
echo $Primerpila->pop(). "\n";

//muestra toda la pila
$Primerpila->printPila();
?>
