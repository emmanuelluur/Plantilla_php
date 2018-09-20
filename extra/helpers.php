<?php
# Funcion que evita uso de caracteres especiales cambiandolos por notaciones
function Escape($item)
{
  return htmlspecialchars($item, ENT_QUOTES);
}

# Valida campo vacio y sin caracteres especiales, a diferencia de la otra
# este no cambia, solo compara.
function CampoVacio($item)
{
  $patron = '/^[^$%&|<>#]+$/';
  if (!preg_match($patron , $item)) {
    return true;
  }
}

# validar numeros Enteros
function onlyInt($item)
{
  $patron = '/^[0-9]+$/';
  if (preg_match($patron , $item)) {
    return true;
  }
}

function ValidaMonto($item)
{
  $patron = '/^[0-9]+(.[0-9]{1,4})?$/';
  if (preg_match($patron , $item)) {
    return true;
  }
}
