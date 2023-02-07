<?php include 'includes/header.php';

// Definie o crear una clase
class Producto {
    // Definir atributos o propiedades a la clase
    public $nombre; // <- ATRIBUTO o PROPIEDAD
    public $precio;
    public $disponible;
}
// CREAMOS el OBJETO
$producto = new Producto();
$producto->nombre = 'Tablet';
$producto->precio = 200;
$producto->disponible = true;

echo "<pre>";
var_dump($producto);
echo "</pre>";

// REUTILIZAMOS la clase dentro del nuevo OBJETO
$producto2 = new Producto();
$producto2->nombre = 'Monitor Curvo';
$producto2->precio = 300;
$producto2->disponible = true;

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';