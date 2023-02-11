<?php include 'includes/header.php';
/* CLASES ABSTRACTAS (NO se deben ni pueden instanciar solo se pueden heredar) */

abstract class Transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }
    public function  getInfo(): string
    {
        return "Este transporte tiene " . $this->ruedas . " ruedas y una capacidad de: " . $this->capacidad . " personas ";
    }
    public function getRuedas(): int
    {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte
{
    public function  getInfo(): string
    {
        return "Este transporte tiene " . $this->ruedas . " ruedas y una capacidad de: " . $this->capacidad . " personas y no usa combustible";
    }
    public function getRuedas(): int
    {
        return $this->ruedas;
    }
}



class Automovil extends Transporte
{
    public function  __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
    }
    public function getTransmision(): string
    {
        return $this->transmision;
    }
}

// $transporte = new Transporte(1, 3);
// echo $transporte->getInfo();
// echo "<hr>"; // ESTA instancia descompone el arreglo  mapa

$bicicleta = new Bicicleta(2, 2);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();
echo "<hr>";

$auto = new Automovil(4, 5, 'Manual');
echo $auto->getInfo();
// echo $auto->getTransmmision();
echo "<hr>";

include 'includes/footer.php';
