<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
foreach. (1 punto)
-->

<h1>Ejercicio 2</h1>
<?php
$persona = array("nombre"=>"Sara", "apellido"=>"Martinez", "edad"=>23, "ciudad" => "Barcelona");

foreach ($persona as $key => $value) {
    echo " $key:$value <br>";
  }

?> 
</body>
</html>