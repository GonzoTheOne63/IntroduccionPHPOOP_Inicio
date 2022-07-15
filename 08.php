<?php include 'includes/header.php';
// Incluir las otras clases con AUTOLOAD

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes; 
use App\Detalles; 

// Incluir las otras clases
function mi_autoload($clase) {
    $partes = explode('\\', $clase);
    require __DIR__ . '/clases/' . $partes[1] . '.php';
}
 spl_autoload_register('mi_autoload');

$detalles = new Detalles();
echo "<br>";
echo "<hr>";
$clientes = new Clientes();
echo "<br>";
echo "<hr>";

include 'includes/footer.php';