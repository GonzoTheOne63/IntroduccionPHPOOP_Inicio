<?php include 'includes/header.php';
/* CONECTAR a la BD con PDO */
$db =  new PDO('mysql:host=localhost; dbname=bienes_raices', 'root', '');
/* Cargar los datos de la tabla */
$query = "SELECT titulo, imagen, precio, wc, habitaciones, estacionamiento FROM propiedades";

// // SIN sentencias preparadas
// /* CONSULTAR la BD */
// $propiedades = $db->query($query)->fetchAll();
// /* IMPRIMIR los resultados */
// var_dump($propiedades);

// CON sentencias preparadas PREPARAMOS 
$stmt = $db->prepare($query); // SENTENCIA preparada
 
// EJECUTAMOS
$stmt->execute();
 // OBTENEMOS resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC );

// ITERAMOS sobre los resultados
foreach($resultado as $propiedad) :
    echo "<pre>";
    echo "<hr>";
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";
    echo $propiedad['precio'];
    echo "<br>";
    echo $propiedad['wc'];
    echo "<br>";
    echo $propiedad['habitaciones'];
    echo "<br>";
    echo $propiedad['estacionamiento'];

endforeach;



include 'includes/footer.php';
