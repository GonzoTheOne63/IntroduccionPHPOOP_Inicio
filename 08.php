<?php include 'includes/header.php';
// Incluir las otras clases con AUTOLOAD

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

function mi_autoload($clase) {
    // echo $clase;
    require __DIR__ . '/clases/' . $clase . '.php';
}
spl_autoload_register('mi_autoload');

$detalles = new Detalles();
echo "<br>";
echo "<hr>";
$clientes = new Clientes();
include 'includes/footer.php';