<?php
include 'includes/header.php';

// Importamos las clases con su namespace usando "use".
// Así podemos instanciarlas directamente como "Cliente" y "Detalle"
use  App\Cliente;
use  App\Detalle;

function mi_autoload($clase){

    // Dividimos el namespace en partes para obtener solo el nombre de la clase
    $partes = explode('\\', $clase);

    // Incluimos el archivo correspondiente a la clase
    require __DIR__ . '/clases/' . $partes[1]. ".php";
}

spl_autoload_register('mi_autoload');

// Instanciamos la clase Detalle (se carga automáticamente desde clases/Detalle.php)
$detalle = new Detalle();
echo '<hr>';

$cliente = new Cliente();
echo '<hr>';

include 'includes/footer.php';

?>