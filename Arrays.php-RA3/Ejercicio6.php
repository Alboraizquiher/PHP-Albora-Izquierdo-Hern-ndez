<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Un profesor quiere registrar las notas de su clase en un array asociativo. Las notas son
las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de
mayor a menor -->
    

<h1>Ejercicio 6</h1>
<?php

$alumnos = [

    "Miguel" => 5,
    "luis"=> 7,
    "Marta"=>10,
    "Isabel"=>8,
    "Aitor"=>4,
    "pepe"=>1

];
function my_sort($a, $b) {
    if ($a == $b) return 0;
    return ($a > $b) ? -1 : 1;
  }
 uasort($alumnos, "my_sort");

 foreach($alumnos as $key => $value){

    echo "" . $key . " => " . $value;
    echo ",";


 };


?>


</body>
</html>