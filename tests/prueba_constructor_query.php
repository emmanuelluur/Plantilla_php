<?php
require_once "../modelo/database.php";

use modelo\database\DB;

/*
  Ejemplo de uso
*/
/*
$db = new DB;
$categoria = 'Comida';
$nuevo = $db->Tabla('tbl_categorias')
->Sentencia('insert')
->Insert()
->Campos('categoria')
->Valores("{$categoria}")
->Run();

$busca = $db->Tabla('tbl_producto')
->Sentencia('select')
->Select('producto, precio')
->Where('estado = 1')
->Run();

$join = $db->Tabla('tbl_producto')
->Sentencia('select')
->Select('producto, precio')
->Join('LEFT JOIN tbl_categoria ON tbl_producto.id_categoria = tbl_categoria.id')
->Where('estado = 1')
->Run();

$edita = $db->Tabla('tbl_categoria')
->Sentencia('update')
->Update()
->Set('estado = 0')
->Where('id = 1')
->Run();
echo $nuevo."\n" .$busca. "\n". $join."\n".$edita;
*/
