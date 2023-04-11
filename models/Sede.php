<?php

require_once 'Conexion.php';

class Sede extends Conexion{

  private $accesoBD;

  public function __CONSTRUCT(){
    $this->accesoBD = parent::getConexion();
  }

  public function listarSedes(){
    try {
      
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

}