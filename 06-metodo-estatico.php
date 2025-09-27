<?php 
declare(strict_types = 1);

include 'includes/header.php';

class Product {

    // Metodos estaticos.

    // "static" significa que pertenece a la clase, no a cada objeto.
    // Todas las instancias de la clase comparten esta misma propiedad.
    public $imagen;
    public static $imagenPLaceholder = 'Imagen.jpg';

    public function __construct(public string $nombre,public float $precio, public bool $disponible, string $imagen){

        if($imagen){
            // self:: -> acceder a propiedades o métodos estáticos desde dentro de la clase
            self::$imagenPLaceholder = $imagen;
        }
    }

    // Se puede llamar directamente desde la clase sin crear un objeto.
    // No puede usar $this porque no pertenece a un objeto específico.
    public static function obtenerImagen(){
        return self::$imagenPLaceholder;
    }

    public function mostrarProducto(){
        echo 'El producto es: ' . $this->nombre . ' y su precio es de: ' . $this->precio;
    }

}

// Se llama usando el nombre de la clase sin instanciarla
echo product::obtenerImagen();

// producto 1 
$product = new Product('Televisor', 550, true, 'televisor.jpg'); 

echo '<pre>';
    var_dump($product);
echo '</pre>';

include 'includes/footer.php';
