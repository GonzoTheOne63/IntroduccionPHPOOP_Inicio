<?php

declare(strict_types=1);

include 'includes/header.php';

// MÉTODO ESTÁTICO
class Producto // Estos son "atributos o propiedades"
{   
    public $imagen;
    public static $imagenPlaceholder = "imagen.jpg"; ## Creando una variable static

    public function __construct(private string $nombre, public int $precio, public bool $disponible, string $imagen) // Estás son las propidades
    {
        if($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }
    public static function obtenerimagenProducto() {
        return self::$imagenPlaceholder;
    }
    public static function obtenerProducto() {
        echo "Obteniendo datos del Producto...";
    }
    public function mostrarProducto(): void ## Estos son los métodos
    {
        echo "El Producto es: " . $this->nombre . "y su precio es de: $" . $this->precio;
    } ## Mientras más cerrado es mejor (principio de la programación)
    public function getNombre(): string // Con "get" tengo acceso
    {
        return $this->nombre;
        
    }
    public function setNombre(string $nombre) // Con "set" puedo modificar
    {
        $this->nombre = $nombre;
    }
}
 
$producto = new Producto('Tablet 24 pulgadas', 200, true, '');

echo $producto->obtenerimagenProducto();

echo $producto->getNombre();
$producto->setNombre('Tablet Nueva'); // Así modifico la propiedad

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo 55 pulgadas', 400, true, 'monitorCurvo.jpg');

echo $producto2->getNombre();

echo $producto->obtenerimagenProducto();

include 'includes/footer.php';