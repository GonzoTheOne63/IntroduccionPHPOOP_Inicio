<?php include 'includes/header.php';
## Sentencias Preparadas

## Conectar a la BASE de DATOS con mysqli
$db = new mysqli('localhost', 'root', '', 'bienes_raices');

// var_dump($db);
## Crear el "query" 
$query = "SELECT titulo, imagen, precio FROM propiedades";
## Lo preparamos
$stmt = $db->prepare($query);
## Lo mandamos ejecutar
$stmt->execute();
## Creamos la variable
$stmt->bind_result($titulo, $imagen, $precio);
## Mandamos llamar el resultado
// $stmt->fetch();
## Imprimimos el $resultado
// var_dump($titulo);
while($stmt->fetch()):
var_dump($titulo, $imagen, $precio);
endwhile;

// while($row = $resultado->fetch_assoc()):
//     var_dump($row);
// endwhile;  ## Para todos los resultados debo iterarlo

//  var_dump($resultado->fetch_assoc()); ##Para un solo resultado


include 'includes/footer.php';