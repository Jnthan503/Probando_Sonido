<?php
//ESTA CLASE SE USARÁ PARA CONVERTIR UNIDAD DE BYTES A DESTINO

include '5.Instanciar.php';
class Bytes_a_Unidades extends Unidad_a_Bytes {
  
  public function Bytes_a_Unidades (){
    $this->Captura ();
    $this->Convertir_a_Bytes ();
      switch ($this->to){
        case 'Bytes':
          $ConvertirUnidad = $this->converBytes / parent::BYTE;
        echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
          break;
        case "Kilobytes":
          $ConvertirUnidad = $this->converBytes / parent::KILOBYTE;
         echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
          break;
        case "Megabytes":
          $ConvertirUnidad = $this->converBytes / parent::MEGABYTE;
        echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
          break;
        case "Gigabytes":
          $ConvertirUnidad = $this->converBytes / parent::GIGABYTE;
        echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
          break;
        case "Terabytes":
          $ConvertirUnidad = $this->converBytes / parent::TERABYTE;
        echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
          break; 
        }
    }
  }



?>