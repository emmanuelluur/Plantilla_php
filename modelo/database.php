<?php
namespace modelo\database;
/**
* funciones para crear sentencia CRUD sql
*/
require_once "../modelo/sqlModelo.php";
use modelo\sqlModelo\ModeloSQL;

class DB {
  protected $query;

  public function Sentencia($sentencia){
    $this->Sentencia = strtolower($sentencia);
    return $this;
  }


  public function Tabla($tabla){
    $this->Tabla = "{$tabla}";
    return $this;
  }


  public function Select($select) {
    $this->Select = "SELECT {$select}";
    return $this;
  }


  public function Join($join){
    $this->Join = $join;
    return $this;
  }


  public function Where($where) {
    $this->Where = "Where {$where}";
    return $this;
  }


  public function Insert () {
    $this->Insert = "INSERT INTO";
    return $this;
  }


  public function Campos($campos) {
    $this->Campos = "({$campos})";
    return $this;
  }


  public function Valores($values) {
    $this->Valores = "VALUES({$values})";
    return $this;
  }

  public function Update(){
    $this->Update = "UPDATE";
    return $this;
  }
  public function Set($set){
    $this->Set = "SET {$set}";
    return $this;
  }

  public function Run(){
    $dbModel = new ModeloSQL;
    if(!isset($this->Sentencia)){
      die();
    }


    switch ($this->Sentencia) {
      case 'select':

      if (isset($this->Select) && !isset($this->Join)):
        $this->query = "{$this->Select} FROM {$this->Tabla} {$this->Where}";
      endif;

      if (isset($this->Select) && isset($this->Join)):
        $this->query = "{$this->Select} FROM {$this->Tabla} {$this->Join} {$this->Where}";
      endif;

      return $dbModel->MuestraRegistro($this->query);
      break;


      case 'insert':

      $this->query = "{$this->Insert} {$this->Tabla} {$this->Campos} {$this->Valores}";

      return $dbModel->ManejaRegistros($this->query);
      break;


      case 'update':

      $this->query = "{$this->Update} {$this->Tabla} {$this->Set} {$this->Where}";

      return $dbModel->ManejaRegistros($this->query);
      break;

    }
  }

}
