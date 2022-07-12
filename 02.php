<?php

declare(strict_types=1);
include 'includes/header.php';

// ENCAPSULACIÓN
class Producto // Estos son "atributos o propiedades"
{
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }
    public function mostrarProducto()
    {
        echo "El Product es: " . $this->nombre . "y su precio es de: $" . $this->precio;
    }
}
// Aquí el código del OBJETO
$producto = new Producto('Tablet 24 pulgadas', 200, true);
$producto->mostrarProducto();
    echo "<pre>";
        var_dump($producto);
    echo "</pre>";

$producto2 = new Producto('Monitor Curvo 55 pulgadas', 400, true);
$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';
