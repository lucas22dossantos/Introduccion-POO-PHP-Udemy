<?php
include 'includes/header.php';

// Ejemplo de autoload en PHP
// --------------------------

// En lugar de usar `require` manualmente para cada clase
// se utiliza `spl_autoload_register()` para cargar las clases
// automáticamente cuando se instancian.

// Ejemplo sin autoload (manualmente):
// require 'clases/clientes.php';
// require 'clases/detalles.php';

// Definimos la función que cargar las clases
function mi_autoload($clase){

    echo "Cargando clase: " . $clase . "<br>";

    require __DIR__ . '/clases/' . $clase . ".php";
}

// Registramos nuestra función como "autoload"
spl_autoload_register('mi_autoload');

$detalle = new Detalle();
echo '<hr>';

$cliente = new Cliente();
echo '<hr>';

include 'includes/footer.php';

?>