<?php

// Barletta Luciano, Caporale Damian, Fernandez Agustin y Georgina Mondino

require ('PiezaAjedrezInterface.php');

class Torre implements PiezaAjedrezInterface {
  
  protected $columna = "A";
  protected $fila = 1;
  protected $color = "Blanco";

  public function movimientosPosibles(){
    $movimientos = []
    for($position = 1; $position < 9; $position++){
      if($position != $this->fila){
        $movimientos = $this->columna . strval($position);
      }
    }

    for($position = ord("A"); $position < ord("I"); $position++){
      if($position != ord($this->columna)){
        $movimientos = chr($position) . strval($this->fila);
      }
    }

    return $movimientos;
  }
  
  public function posicionarEn(string $celda) {
    $this->columna = $celda[0];
    $this->fila = ord($celda[1]) - ord("0");
  }
  
}