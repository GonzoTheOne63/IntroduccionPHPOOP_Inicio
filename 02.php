<?php
/* ENCAPSULACIÓN - MIENTRAS más cerrado es mejor, para que no se modifique */

declare(strict_types=1);
include 'includes/header.php';

// DEFINIR o crear una clase
class Producto
{
    /* PUBLIC se puede acceder desde cualquier lugar (clase y objeto) */

    /* PROTECTED solo se puede acceder a él unicamente desde la clase no permite acceder ni modificar */

    /* PRIVATE solo pueden acceder a él miembros de la misma clase */
    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
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
// CREAMOS el OBJETO
$producto = new Producto('Tablet XL', 300, true);

echo $producto->getNombre();
$producto->setNombre('Tablet GB&MJ');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 500, true);

echo "<pre>";
echo $producto2->getNombre();
echo "</pre>";

$producto3 = new Producto('Pack Teclado-Mouse', 400, true);

echo "<pre>";
echo $producto3->getNombre();
echo "</pre>";

include 'includes/footer.php';
