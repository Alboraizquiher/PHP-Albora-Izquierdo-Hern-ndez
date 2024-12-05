<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump. (1 punto -->

<h1>Ejercicio 4</h1>
<?php
$persona = array("nombre"=>"Sara", "apellido"=>"Martinez", "edad"=>23, "ciudad" => "Barcelona");
$persona["edad"] = 24;
unset($persona["ciudad"]);
var_dump($persona);
?>
    
</body>
</html>