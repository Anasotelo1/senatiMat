<?php

require_once 'Conexion.php';

class Escuela extends Conexion{

  private $accesoBD;

  public function __CONSTRUCT(){
    $this->accesoBD = parent::getConexion();
  }

  public function listarEscuela(){
    try {
      
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

}