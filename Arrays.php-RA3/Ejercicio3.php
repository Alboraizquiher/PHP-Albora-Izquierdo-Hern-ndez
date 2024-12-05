<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!--Modifica la edad del primer array a 24. Vuelve a mostrar toda su información. (1
punto)
-->
<h1>Ejercicio 3</h1>
<?php
$persona = array("nombre"=>"Sara", "apellido"=>"Martinez", "edad"=>23, "ciudad" => "Barcelona");
$persona["edad"] = 24;

foreach ($persona as $key => $value) {
    echo " $key:$value <br>";
  }
?>

</body>
</html>