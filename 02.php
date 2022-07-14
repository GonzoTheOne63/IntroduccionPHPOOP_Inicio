<?php

declare(strict_types=1);
include 'includes/header.php';

// ENCAPSULACIÓN
class Producto // Estos son "atributos o propiedades"
{   ## "public" = modificador de acceso se puede modificar tanto en "clase y objeto".
    ## "protected" = Se puede acceder y modificar únicamente en la "clase".
    ## "private" = solo miembros de la misma clase pueden acceder a él.
    public function __construct(private string $nombre, public int $precio, public bool $disponible) // Estás son las propidades
    {
    }
    public function mostrarProducto() : void ## Estos son los métodos
    {
        echo "El Producto es: " . $this->nombre . "y su precio es de: $" . $this->precio;
    } ## Mientras más cerrado es mejor (principio de la programación)
    public function getNombre() : string // Con "get" tengo acceso
    {
        return $this->nombre;
        // return $this->precio;
        // return $this->disponible;
    }
    public function setNombre(string $nombre) // Con "set" puedo modificar
    {
        $this->nombre = $nombre;
        // $this->precio = $precio;
        // $this->disponible = $disponible;
    }
}
// Aquí el código del OBJETO 
$producto = new Producto('Tablet 24 pulgadas', 200, true);

echo $producto->getNombre();
$producto->setNombre('Tablet Nueva'); // Así modifico la propiedad

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo 55 pulgadas', 400, true);
$producto2->setNombre('Monitor Nuevo Nombre'); // Así modifico la propiedad

echo "<pre>";
var_dump($producto2);
echo "</pre>";

echo $producto2->getNombre();

include 'includes/footer.php';