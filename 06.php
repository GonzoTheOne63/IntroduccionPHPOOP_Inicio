<?php include 'includes/header.php';
/* INTERFACES nos dice que hace una clase y que datos retorna, pero no nos dice cómo lo hace  */
interface TransporteInterfaz {  /* DE esta manera se defina la forma del código */
    public function getInfo() : string;
    public function getRuedas() : int; 
}
class Transporte implements TransporteInterfaz {
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

include 'includes/footer.php';