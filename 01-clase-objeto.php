<?php 
include 'includes/header.php';

// Definir una clase (plantilla para crear objetos)
class Producto {

    // Propiedades de la clase - Son variables que representan las características de cada objeto
    public $nombre;
    public $precio;
    public $disponible;
}

// Crear (instanciar) un objeto a partir de la clase.
// Cada objeto es una "copia" independiente de la clase.

$producto = new Producto(); // Se crea el objeto $producto.
// "new" crea un nuevo objeto basado en la clase Producto.
// Cada objeto es independiente y puede tener valores distintos.

// Asignar valores a las propiedades del objeto $producto
$producto->nombre = 'Tablet';
$producto->precio = 200;
$producto->disponible = true;


echo '<pre>';
    var_dump($producto);
echo '</pre>';


// Crear otro objeto distinto basado en la misma clase
$producto2 = new Producto();


$producto2->nombre = 'Celular';
$producto2->precio = 100;
$producto2->disponible = false;


echo '<pre>';
    var_dump($producto2);
echo '</pre>';


include 'includes/footer.php';
