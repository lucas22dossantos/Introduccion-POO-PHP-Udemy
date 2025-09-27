<?php 
declare(strict_types = 1); // Fuerza a que los tipos de datos sean correctos (estrictos)

include 'includes/header.php';

class Prod {

    // Propiedades del objeto
    public $nombre;
    public $precio;
    public $disponible;

    // Constructor: se ejecuta automáticamente al crear un objeto
    // Sirve para inicializar las propiedades con valores
    public function __construct(string $nombre, float $precio, bool $disponible){
        // $this hace referencia al objeto actual
        $this->nombre = $nombre;        
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}

// Crear objeto con valores iniciales (gracias al constructor)
$producto = new Prod('Televisor', 550, true); 


echo '<pre>';
    var_dump($producto);
echo '</pre>';

include 'includes/footer.php';
