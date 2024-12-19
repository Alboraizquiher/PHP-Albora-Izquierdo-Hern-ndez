<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media. (1 punto)
 -->
 <h1>Ejercicio 7</h1>
<?php

$alumnos = [

    "Miguel" => 5,
    "luis"=> 7,
    "Marta"=>10,
    "Isabel"=>8,
    "Aitor"=>4,
    "pepe"=>1

];

$media = array_sum($alumnos) /6;

echo  "Media de las notas: " .$media ."\n";

for ($i=0; $i < $alumnos ; $i++) { 
    if ($alumnos[$i]  > $media ) {
        echo "Los alumnos con nota por encima de la media son:  ".$alumnos[$i]; 
    }
}



?>


</body>
</html>