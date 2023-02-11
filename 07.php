<?php include 'includes/header.php';
/* POLIMORFISMO es parte de herencia y de interfaz los objetos pueden tener diferentes formas */
interface TransporteInterfaz
{  /* DE esta manera se defina la forma del código */
    public function getInfo(): string;
    public function getRuedas(): int;
}
class Transporte implements TransporteInterfaz
{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }
    public function  getInfo(): string
    {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de: " . $this->capacidad . " personas ";
    }
    public function getRuedas(): int
    {
        return $this->ruedas;
    }
}

class Automovil extends Transporte  implements TransporteInterfaz
{ // AQUI se convierte en hija de la clase TransporteInterfaz
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
    }
    public function  getInfo(): string
    {
        return "El transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de: " . $this->capacidad . " personas y tiene el color: " . $this->color;
    }
    public function getColor(): string
    {
        return "El color es " . $this->color;
    }
}

echo "<pre>";
var_dump($transporte = new Transporte(8, 20));
echo "<hr>";
var_dump($auto = new Automovil(4, 5, 'Rojo'));
echo "<hr>";


echo $transporte->getInfo();
echo "<hr>";

echo $auto->getInfo();
echo "</pre>";

echo "<hr>";

echo $auto->getColor();
echo "</pre>";

include 'includes/footer.php';
