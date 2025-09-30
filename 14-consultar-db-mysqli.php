<?php
include 'includes/header.php';

//Conexión a la base de datos usando MySQLi (POO)
$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');

//Creamos el query que queremos ejecutar
$query = 'SELECT titulo, precio FROM propiedades';

//Preparamos el query para evitar inyección SQL y optimizar la consulta
$stmt = $db->prepare($query);

//Ejecutamos el query
$stmt->execute();

//Asociamos el resultado a variables
$stmt->bind_result($titulo, $precio);

//Recorremos los resultados con fetch() y mostramos cada fila
while ($stmt->fetch()) :
    // imprimimo el resultado
    var_dump($titulo, '<br>', $precio, '<hr>');

endwhile;


include 'includes/footer.php';
