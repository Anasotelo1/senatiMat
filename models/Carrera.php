<?php

require_once 'Conexion.php';

class Carrera extends Conexion{

  private $accesoBD;

  public function __CONSTRUCT(){
    $this->accesoBD = parent::getConexion();
  }

  public function listar($idescuela = 0){
    try {
      $consulta = $this->accesoBD->prepare("CALL spu_carreras_listar(?)");
      $consulta->execute(array($idescuela));
      return $consulta->fetchALL(PDO::FETCH_ASSOC);
    } 
    catch (Exception $e) {
      die($e->getMessage());
    }
  }

}