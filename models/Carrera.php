<?php

require_once 'Conexion.php';

class Carrera extends Conexion{

  private $accesoBD;

  public function __CONSTRUCT(){
    $this->accesoBD = parent::getConexion();
  }

  public function listarCarrera(){
    try {
      
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

}