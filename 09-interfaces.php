<?php 
include 'includes/header.php';

// Una INTERFAZ define los métodos que una clase DEBE implementar.
// Es como un "contrato" que obliga a que las clases que la usen
// implementen todos los métodos que allí se declaran.
interface trasporteInterfaz{
    public function getInfo() : string;
    public function getRuedas() : int;
}


// Clase abstracta que implementa la interfaz.
// Al implementar la interfaz, esta clase se compromete a
// definir todos los métodos que la interfaz exige.
abstract class transporte implements trasporteInterfaz  {
    
    public function __construct(protected int $ruedas, protected int $capacidad){}

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad;
    }

    public function getRuedas() : int{
        return  $this->ruedas;
    }
}

include 'includes/footer.php';