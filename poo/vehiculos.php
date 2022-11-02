<?php


class Vehiculo {
    var $color;
    var $marca;
    var $gasolina = 0;
    var $numeroPuertas;

    function llenarDeposito($gasolina_nueva){
        $this->gasolina = $this->gasolina + $gasolina_nueva;
        return "Deposito lleno: " . $this->gasolina;
    }

    function acelerar(){
        if ($this->gasolina > 0) {
            $this->gasolina = $this->gasolina - 1;
            return "Gasolina restante: " . $this->gasolina;
        }
    }
    
}

// declaramos un objeto de tipo Vehiculo 
$vehiculo = new Vehiculo();
$vehiculo -> color = 'Azul';
$vehiculo -> marca = 'Toyota';
$vehiculo -> numeroPuertas = 4;

// accedemos al metodo llenarDeposito y pasamos la gasolina indicada
echo $vehiculo -> llenarDeposito(10) . '<br />';

// accedemos al metodo acelerar
print_r($vehiculo->acelerar() . '<br />');
print_r($vehiculo->acelerar() . '<br />');
print_r($vehiculo->acelerar() . '<br />');

