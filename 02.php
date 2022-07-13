<?php

declare(strict_types=1);
include 'includes/header.php';

// ENCAPSULACIÓN
class Producto // Estos son "atributos o propiedades"
{   ## Propiedad   // public = modificador de acceso se puede modificar tanto en "clase y objeto".
    ## protected = Se puede acceder y modificar únicamente en la "clase".
    ## private = solo miembros de la misma clase pueden acceder a él.
    public function __construct(private string $nombre, public int $precio, public bool $disponible)
    {
    }
    public function mostrarProducto(): void ## Método
    {
        echo "El Producto es: " . $this->nombre . "y su precio es de: $" . $this->precio;
    } ## Mientras más cerrado es mejor (principio de la programación)
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
}
// Aquí el código del OBJETO 
$producto = new Producto('Tablet 24 pulgadas', 200, true);

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo 55 pulgadas', 400, true);


echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';
