<?php 
include 'includes/header.php';

// El polimorfismo significa que distintas clases pueden compartir 
// la misma interfaz (los mismos métodos definidos), 
// pero implementarlos de manera diferente según su contexto.

interface trasporteInterfaz{
    public function getInfo() : string;
    public function getRuedas() : int;
}


abstract class transporte implements trasporteInterfaz  {
    
    public function __construct(protected int $ruedas, protected int $capacidad){}

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad;
    }

    public function getRuedas() : int{
        return  $this->ruedas;
    }
}

// Clase Automovil hereda de Transporte
// Sobrescribe getInfo() para adaptarlo a su propio contexto.
class automovil extends transporte{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color){}
    
    public function getInfo() : string {
        return "El auto es de color " . $this->color . " tiene " . $this->ruedas . " ruedas y capacidad para " . $this->capacidad . " personas";
    }

}
 
class Bicicleta extends Transporte {
    public function getInfo() : string {
        return "La bicicleta tiene " . $this->ruedas . " ruedas y capacidad de " . $this->capacidad . " persona";
    }
}

// Demostración de polimorfismo:
// Ambos objetos (Automovil y Bicicleta) tienen el mismo método getInfo(),
// pero devuelven resultados distintos dependiendo de su clase.

$auto = new Automovil(4, 5, "rojo");
echo $auto->getInfo();
echo '<hr>';

$bici = new Bicicleta(2, 1);
echo $bici->getInfo();
echo '<hr>';


include 'includes/footer.php';