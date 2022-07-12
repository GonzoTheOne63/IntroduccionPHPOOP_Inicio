<?php

declare(strict_types=1);
include 'includes/header.php';

// Primero debo DEFINIR una clase
// Dos formas de definir la clase
// Estos son "atributos o propiedades"
class Clientes {
   
  public function __construct(public string $nombre, public string $apellido, public string $email, public int $telefono, public bool $activo)
  {    
  }
  public function mostrarCliente() {
    echo "El Cliente se llama: " . $this->nombre . "Su apellido es:" .$this->apellido . " Su correo es:" . $this->email . " Su número de celular es:"  . $this->telefono . " ¿Se encuentra activo?" . $this->activo;
  }
}
// Aquí el código del OBJETO
$cliente = new Clientes('Maggy', 'Debar', 'maggy@c.com', 3841422455, true);
$cliente->mostrarCliente();
echo "<pre>";
var_dump($cliente);
echo "</pre>";

/* echo "<pre>";
var_dump($producto->nombre);
echo "</pre>";
echo "<pre>";
var_dump($producto->precio);
echo "</pre>";
echo "<pre>";
var_dump($producto->disponible);
echo "</pre>";
echo "<pre>";
var_dump($producto);
echo "</pre>"; */

include 'includes/footer.php';
