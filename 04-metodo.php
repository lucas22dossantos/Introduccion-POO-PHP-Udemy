<?php 
declare(strict_types = 1); // Fuerza a que los tipos de datos sean correctos (estrictos)

include 'includes/header.php';

class Product {
    public function __construct(public string $nombre,public float $precio, public bool $disponible){
    }

    // Método: acción que realiza el objeto
    public function mostrarProducto(){
        // $this se usa para acceder a las propiedades del objeto actual
        echo 'El producto es: ' . $this->nombre . ' y su precio es de: ' . $this->precio;
    }
}
 
// producto 1 
$product = new Product('Televisor', 550, true); 

$product->mostrarProducto();// Llamada al método

echo '<pre>';
    var_dump($product);
echo '</pre>';

// producto 2
$product2 = new Product('tablet', 200, false); 

$product2->mostrarProducto();

echo '<pre>';
    var_dump($product2);
echo '</pre>';

include 'includes/footer.php';
