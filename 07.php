<?php

use Automovil as GlobalAutomovil;
use Transporte as GlobalTransporte;
use TransporteInterfaz as GlobalTransporteInterfaz;

 include 'includes/header.php';
## POLIMORFISMO = PARTE DE HERENCIA Y DE INTERFACE

interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
    // public function getColor() : string; ## Marca error pues no existe la instancia COLOR
}
    class Transporte implements TransporteInterfaz 
{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }
    public function getInfo(): string
    {
        return "Cantidad de ruedas: " . $this->ruedas .  " Capacidad: " . $this->capacidad . " pasajeros";
    }
    public function getRuedas(): int
    {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {   
    }
        public function getInfo(): string
    {
        return "El transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y tiene el color " . $this->color;   
    }
    public function getColor() : string {
        return "El color es " . $this->color;
    }
    
}

echo "<pre>";
var_dump($transporte = new Transporte(10, 4));
echo "<hr>";
var_dump($auto = new Automovil(4, 4, 'Rojo'));
echo "<br>";
echo "<hr>";
echo $transporte->getInfo();
echo "<hr>";
echo $auto->getInfo();
echo "<hr>";
echo $auto->getColor();
echo "</pre>";


include 'includes/footer.php';