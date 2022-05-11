<?php 

class Instanciar extends Bytes_a_Unidades{
  public function Instancias() {
    $this->Captura ();
    $this->Convertir_a_Bytes ();
    $this->Bytes_a_Unidades ();
  }
}

$calculadora = new Instanciar;
$calculadora -> Instancias ();


?>