<?php
/* ABSTRACCIÓN */
declare(strict_types = 1);
include 'includes/header.php';

// DEFINIR o crear una clase
class Producto {
   
    public function __construct(public string $nombre, public int $precio, public bool $disponible, public string $dimenciones)
    {        
    }     public function mostrarProducto() { // MÉTODO o FUNCIÓN
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio . " disponible: " . $this->disponible . " sus dimenciones son: " . $this->dimenciones;
    }
}
// CREAMOS el OBJETO
$producto = new Producto('Tablet ', 300, true, '20x30');
$producto->mostrarProducto();

echo "<pre>";
var_dump($producto);
echo "</pre>";

// REUTILIZAMOS la clase dentro del nuevo OBJETO
$producto2 = new Producto('Monitor Curvo', 500, true, '55');
$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

$producto3 = new Producto('Audifonos HD', 500, true, '30');
$producto3->mostrarProducto();

echo "<pre>";
var_dump($producto3);
echo "</pre>";

include 'includes/footer.php';