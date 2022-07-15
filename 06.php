<?php include 'includes/header.php';
## INTERFACES permiten agrupar declaraciones de funciones sin implementarlas = plano de funciones de una clase.

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

include 'includes/footer.php';