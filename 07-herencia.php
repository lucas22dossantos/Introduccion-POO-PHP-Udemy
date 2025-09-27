<?php 
include 'includes/header.php';

//clase padre
class transporte{
    // // Constructor con propiedades protegidas
    public function __construct(protected int $ruedas, protected int $capacidad){}

    // Método para mostrar información común a todos los transportes
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad;
    }
}

// clase hija : bicicleta
// Hereda todo de Transporte (constructor y métodos)
class bicicleta extends transporte{}

// clase hija : auto
// Hereda de Transporte, pero agrega su propia propiedad ($transmision) y su propio método (getTransmision).
class auto extends transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){}

    public function getTransmision() : string
    {
        return  $this->transmision;
    }
}

//Instancias

$bicicleta = new bicicleta(2,1); // Bicicleta usa el constructor de Transporte
echo $bicicleta->getInfo();
echo '<hr>';


$auto = new auto(4, 3, ' Manual'); // Auto usa su propio constructor (porque redefine el del padre)
echo $auto->getInfo();
echo $auto->getTransmision();
echo '<hr>';



include 'includes/footer.php';