<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Crear un nuevo array con un valor separado por coma a partir de la cadena de texto
$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
información en orden descendente (1 punto) 
-->
<h1>Ejercicio 5</h1>
<?php
$letters = array("a", "b", "c", "d", "e", "f") ;


$preserved = array_reverse($letters, true);
$contador = 6;
foreach ($preserved as $key => $value) {
    echo " letter $contador º : $value <br>";
    $contador --;
  }


  ?>  
</body>
</html>