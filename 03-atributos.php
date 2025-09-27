<?php 
declare(strict_types = 1); // Fuerza a que los tipos de datos sean correctos (estrictos)

include 'includes/header.php';

class Prod { 
    // Constructor con "promotion" (PHP 8+)
    // En una sola línea declarás y asignás las propiedades
    public function __construct(public string $nombre,public float $precio, public bool $disponible){
        // Ya no hace falta usar $this->nombre = $nombre; etc.
    }
}
 
$producto = new Prod('Televisor', 550, true); 


echo '<pre>';
    var_dump($producto);
echo '</pre>';

include 'includes/footer.php';
