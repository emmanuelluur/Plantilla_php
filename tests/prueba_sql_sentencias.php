<?php

require_once "../modelo/database.php";
use modelo\database\DB;





$db = new DB;
/*
$categoria = 'Comida';
$nuevo = $db->Tabla('tbl_categorias')
->Sentencia('insert')
->Insert()
->Campos('categoria')
->Valores("'$categoria'")
->Run();

if ($nuevo) {
echo "Guardado satisfactoriamente\n";
} else {
echo "Error de ejecucion\n";
}
*/
/*
echo json_encode(
  $db->Tabla('tbl_categorias')
  ->Sentencia('select')
  ->Select('*')
  ->Where('estado = 1')
  ->Run()
)."\n";.
*/
