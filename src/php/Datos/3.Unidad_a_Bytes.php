<?php
include '4.Bytes_a_Unidades.php';
class Unidad_a_Bytes extends Datos {

  public function Convertir_a_Bytes(){
    $this->Captura ();
  //// PEDIR CANTIDAD Y CONVERTIR LA SELECCION "FROM" A BYTE
    switch ($this->from) {
      case 'Bytes':
        $this->converBytes = $this->cantidad * parent::BYTE;
         break;
      case 'Kilobytes':
          $this->converBytes = $this->cantidad * parent::KILOBYTE;
         break;
      case "Megabytes":
          $this->converBytes = $this->cantidad * parent::MEGABYTE;
         break;
      case "Gigabytes":
          $this->converBytes = $this->cantidad * parent::GIGABYTE;
         break;
      case "Terabytes":
         $this->converBytes = $this->cantidad * parent::TERABYTE;
         break;
      }
      return $this->converBytes;
      }
    }
?>