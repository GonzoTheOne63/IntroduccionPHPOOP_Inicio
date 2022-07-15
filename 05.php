<?php include 'includes/header.php';

## CLASES ABSTRACTAS son aquellas clases que no se pueden instanciar solo se pueden heredar
abstract class Transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }
    public function getInfo(): string
    {
        return "Cantidad de ruedas: " . $this->ruedas .  " Capacidad: " . $this->capacidad . " pasajeros";
    }
    public function getRuedas(): string
    {
        return $this->ruedas;
    }
}
// $transporte = new Transporte(3, 2);
// echo $transporte->getInfo();
// echo "<hr>"; ##Esto equivale a colocar instancia o a INSTANCIAR

class Bicicleta extends Transporte
{
    public function getInfo(): string
    {
        return "    NO UTILIZA COMBUSTIBLES FÓSILES. Cantidad de ruedas: " . $this->ruedas .  " Capacidad: " . $this->capacidad . " pasajeros ";
    }
}
class Vagoneta extends Transporte
{
}
class Automovil extends Transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
    }
    public function getTransmision(): string
    {
        return $this->transmision;
    }
}


$bicicleta = new Bicicleta(02, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();


echo "<hr>"; ## Añade una líea de separación
$vagoneta = new Vagoneta(4, 12);
echo $vagoneta->getInfo();

echo "<hr>";
$auto = new Automovil(4, 5, ' Transmision Manual');
echo $auto->getInfo();
echo $auto->getTransmision();


include 'includes/footer.php';