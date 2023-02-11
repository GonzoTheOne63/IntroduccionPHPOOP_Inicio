<?php include 'includes/header.php';
/* CONECTAR a la BD com Mysqli. con la forma ORIENTADA a OBJETOS */
$db = new mysqli('localhost', 'root', '', 'bienes_raices');
// CREAMOS el query
$query = "SELECT titulo FROM propiedades";
// PREPARAMOS el query
$stmt = $db->prepare($query); // SENTENCIA preparada
// LO ejecutamos
$stmt->execute(); // EJECUTA lo que preparó
// CREAMOS la variable
$stmt->bind_result($titulo);
// ASIGNAMOS el resultado
$stmt->fetch(); // DEVUELVE el resultado
// IMPRIMIMOS el resultado
// var_dump($titulo);
// var_dump($precio);
// var_dump($descripcion);

// VARIOS resultados
while($stmt->fetch()) :
    var_dump($titulo);
endwhile;

include 'includes/footer.php';