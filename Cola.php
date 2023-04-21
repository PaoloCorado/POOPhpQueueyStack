<?php

class Cola {
    private $cola;

    public function __construct() {
        $this->cola = array();
    }

    public function enqueue($value) {
        array_push($this->cola, $value);
    }

    public function dequeue() {
        return array_shift($this->cola);
    }

    public function count() {
        return count($this->cola);
    }

    public function isEmpty() {
        return empty($this->cola);
    }

    public function printQueue() {
        foreach ($this->cola as $value) {
            echo $value . ' ';
        }
        echo "\n";
    }
}

// Crea una instancia de la cola
$cola = new Cola();

// Agrega elementos a la cola
$cola->enqueue(1);
$cola->enqueue(2);
$cola->enqueue(3);
$cola->enqueue(4);

// Muestra el número de elementos en la cola
echo $cola->count() . "\n";

// Elimina el primer elemento de la cola
echo $cola->dequeue() . "\n";

// Muestra toda la cola
$cola->printQueue();
?>
