<?php include 'includes/header.php';

## Conectar a la base de datos con PDO = extensión Objetos de Datos de PHP
$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root', '');

## Creamos el query
$query = "SELECT titulo, precio, imagen from propiedades";

## Lo preparamos
$stmt = $db->prepare($query);

## Lo ejecutamos
$stmt->execute();

## Obetener los resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);


## Iterar
foreach($resultado as $propiedad):
    echo "<hr>";
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "</br>";
    echo $propiedad['precio'];
    echo "</br>";
endforeach;


include 'includes/footer.php';