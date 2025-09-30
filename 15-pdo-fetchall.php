<?php
include 'includes/header.php';

// PDO soporta múltiples motores de bases de datos (MySQL, PostgreSQL, SQLite, etc.)
// mysqli solo soporta MySQL

// Conexión a la base de datos con PDO
$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'root');

$query = 'SELECT titulo, precio FROM propiedades';
$stmt = $db->prepare($query);
$stmt->execute();

// Obtenemos todos los resultados en un array asociativo
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Recorremos los resultados con foreach
foreach ($resultado as $propiedad):
    echo '<hr>';
    echo $propiedad['titulo'] . " - $" . $propiedad['precio'];

endforeach;

// echo '<pre>';
// var_dump($resultado);
// echo '</pre>';

include 'includes/footer.php';
