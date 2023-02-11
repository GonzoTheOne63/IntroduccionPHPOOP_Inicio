<?php include 'includes/header.php';
/* Namespaces */ // NO se deben tener dos clases con el mismo nombre
require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use App\Detalles;
use App\Clientes;


$detalles = new Detalles();
echo "<hr>";

$clientes = new Clientes();
echo "<hr>";

// $clientes2 = new Clientes();
// echo "<hr>";


include 'includes/footer.php';
