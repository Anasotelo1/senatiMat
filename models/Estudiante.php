<?php

require_once 'Conexion.php';

class Estudiante extends Conexion{

  private $accesoBD;

  public function __CONSTRUCT(){
    $this->accesoBD = parent::getConexion();
  }

  public function listarEstudiante(){
    try {
      
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

}