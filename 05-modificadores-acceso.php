<?php 
declare(strict_types = 1); // Fuerza a que los tipos de datos sean correctos (estrictos)

include 'includes/header.php';

class Product {

    // Modificadores de acceso:

    // public    -> accesible desde cualquier lugar (clase y objeto).
    // protected -> accesible solo dentro de la clase y sus hijas.
    // private   -> accesible únicamente dentro de la misma clase.

    // ahora es "protected", no accesible directo desde fuera
    public function __construct(protected string $nombre,public float $precio, public bool $disponible){
    }

    public function mostrarProducto(){
        echo 'El producto es: ' . $this->nombre . ' y su precio es de: ' . $this->precio;
    }

    // Getters & Setters:

    // Getter -> permite acceder al valor de una propiedad protegida/privada
    public function getNombre(){
        return $this->nombre;
    } 

    // Setter -> permite modificar la propiedad de forma controlada
    public function setNombre(string $nombre){
        $this->nombre = $nombre ;
    } 

}

// producto 1 
$product = new Product('Televisor', 550, true); 

$product->mostrarProducto(); 

echo $product->getNombre(); // obtiene nombre con getter
$product->setNombre('Nuevo producto'); // cambia nombre con setter


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
