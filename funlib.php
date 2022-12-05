<?php
function cadena($cadena)
{
    $cadena = substr($cadena, 0, 30);
    $cadena = str_pad($cadena, 30, " ");
    return $cadena;
}

?>