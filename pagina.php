<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Crea una función que reciba una cadena como parámetro y retorne una cadena con
el mismo valor y longitud fija a 30 caracteres. Si la cadena dada es más larga debe
recortarse, y si es más corta deben añadírsele tantos espacios como sean necesarios al
final. -->

    <?php

require_once 'funlib.php';

echo "<table border = 1>";
echo "<tr>";
echo "  <td> Pablo  </td>";
echo "  <td> Machado </td>";
echo "</tr>";
echo "<td> " . "Ejercicio" . "</td>";
echo "<td> " . "anexo3-pag51-ej4" . "</td>";
echo "</tr>";
echo "<td> " . 'cadena("Hola")' . "</td>";
echo "<td> " . "Hola                                    " . "</td>";
echo "</tr>";
echo "</table>";

echo cadena("Hola");

?>
</body>

</html>