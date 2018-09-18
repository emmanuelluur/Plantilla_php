<?php
namespace sql\sqlModelo;

require_once "conexion.php";

use sql\conexion\Conn;

class ModeloSQL extends Conn
{
    public function MuestraRegistro($sql)
    {
        $result = $this->setConexion()->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //almacena en array asosiativo
                $data[] = $row;
            }
            return $data;
            mysqli_free_result($result);
        } else {
            // regresa 0 cuando esta vacia la consulta
            return 0;
        }
        $this->closeConexion();
    }

    public function ManejaRegistros($sql)
    {
        /**
         * al ser similar la ejecucion se usa para update y delete tambien
         */
        $result = $this->setConexion()->query($sql);
        if ($result === true) {
            return true;
        } else {
            return false;
        }
        $this->closeConexion();
    }

    function showError()
    {
      return $this->setConexion()->error();
    }

}
