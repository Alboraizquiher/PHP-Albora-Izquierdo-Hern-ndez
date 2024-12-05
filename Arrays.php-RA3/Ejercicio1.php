<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- ) Crea un array asociativo con los siguientes datos y claves.
nombre: Sara, apellido: Martínez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior utilizando foreach. (1 punto) -->
<h1>Ejercicio 1</h1>
<?php
$persona = array("dato 1º"=>"Sara", "dato 2º"=>"Martinez", "dato 3º"=>23, "dato 4º" => "Barcelona");
echo $persona['dato 1º'];
echo $persona['dato 2º'];
echo $persona['dato 3º'];
echo $persona['dato 4º'];
?> 

</body>
</html>