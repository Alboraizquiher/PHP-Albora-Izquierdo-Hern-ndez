<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
array. (1 punto) -->

<h1>Ejercicio 8</h1>
<?php

$alumnos = [

    "Miguel" => 5,
    "luis"=> 7,
    "Marta"=>10,
    "Isabel"=>8,
    "Aitor"=>4,
    "pepe"=>1

];
$mejorNota = null; 
$mejorAlumno = ""; 

foreach ($alumnos as $nombre => $nota) {
    
    if ($mejorNota === null || $nota > $mejorNota) {
        $mejorNota = $nota;
        $mejorAlumno = $nombre;
    }
}

echo "El alumno con la mejor nota es $mejorAlumno con una nota de $mejorNota.\n";

?>






    
</body>
</html>