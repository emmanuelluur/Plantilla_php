<?php
namespace sql\conexion;

use mysqli;
/**
* Clase devuelve conexion a BD
*/
include_once "../environment.php";
class Conn
{
  protected $conexion;

  public function getServer()
  {
    # servidor ex. localhost
    return constant("dbServer");
  }

  public function getDB()
  {
    # nombre de base de datos
    return constant("dbName");
  }

  public function getUser()
  {
    # nombre de usuario de la base de datos
    return constant("dbUser");
  }

  public function getPass()
  {
    # contraseña de usuario de base de datos
    return constant("dbPass");
  }

  public function setConexion()
  {
    $this->conexion = new Mysqli($this->getServer(), $this->getUser(), $this->getPass(), $this->getDB());
    if ($this->conexion->connect_error) {
      die(1);
    }
    return $this->conexion;
  }
  public function closeConexion() {
    return $this->setConexion()->close();
  }
}
