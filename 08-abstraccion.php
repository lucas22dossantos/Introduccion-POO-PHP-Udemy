<?php 
include 'includes/header.php';

// Clase Abstracta

// "abstract" significa que esta clase NO puede instanciarse.
// Sirve como molde para que otras clases hereden de ella.

abstract class transporte{
    
    public function __construct(protected int $ruedas, protected int $capacidad){}

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad;
    }
}

class bicicleta extends transporte{}

class auto extends transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){}

    public function getTransmision() : string
    {
        return  $this->transmision;
    }
}
// Ejemplo: Esto da error porque no se puede instanciar una clase abstracta:

    // $transporte = new transporte(2,2);
    // echo $transporte->getInfo();

$bicicleta = new bicicleta(2,1);
echo $bicicleta->getInfo();
echo '<hr>';


$auto = new auto(4, 3, ' Manual');
echo $auto->getInfo();
echo $auto->getTransmision();
echo '<hr>';



include 'includes/footer.php';