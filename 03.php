<?php
/* MÉTODOS estáticos NO usa la palabra reservada "this" sino "self" y NO se instancia */

declare(strict_types=1);
include 'includes/header.php';

class Producto
{
    public $imagen;

    public static $imagenPlaceholder = "Imagen.jpg";
    // public static $imagen = "Imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto() {
        return self::$imagenPlaceholder;
    }
    public static function obtenerProducto() {
        echo "Obtener los datos del producto...";    
    }

    public function mostrarProducto(): void
    {
        echo "EL Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
    public function getNombre(): string
    { /* get ACCEDER al objeto */
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    { /* get MODIFICAR al objeto */
        $this->nombre = $nombre;  /* ESPECÍFICO para modificar el nombre */
    }
}

$producto = new Producto('Tablet XL', 300, true, '');

echo $producto->obtenerImagenProducto();

echo $producto->getNombre();
$producto->setNombre('Tablet GB&MJ');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 500, true, 'Monitor');

echo "<pre>";
echo $producto2->getNombre();
echo "</pre>";

// $producto3 = new Producto('Pack Teclado-Mouse', 400, true);

// echo "<pre>";
// echo $producto3->getNombre();
// echo "</pre>";

include 'includes/footer.php';
