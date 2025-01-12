<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Una famosa Ɵenda de cómics ha pedido una aplicación web que permita la gesƟón
del inventario de su Ɵenda. Modificar tomando como base el fichero
miTiendaComics.php.
La Ɵenda parƟrá de 4 cómics iniciales:

Para ello, la Ɵenda pide realizar las siguientes tareas:
1) Calcular valor almacén total mulƟplicando stock por precio
a. Implementar función mostrarValorAlmacen(1 punto)
2) Para la semana del “manga”. Aplica una rebaja del 30% a todos los productos
que tengan por idioma “japonés”.
a. Arreglar la función aplicarDescuentoManga() (1 punto)

 -->

 <?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
    // Puedes agregar más categorías y cómics según sea necesario
];

// main
// antes descuento
mostrarComicsEnTabla();

 mostrarValorAlmacen();
aplicarDescuentoManga();
// mostramos el inventario actualizado
mostrarComicsEnTabla();
mostrarValorAlmacen();

function mostrarComicsEnTabla()
{
    global $inventario;
    echo '<br>';
    echo '<table border="1">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}


/**1) Calcular valor almacén total mulƟplicando stock por precio
a. Implementar función mostrarValorAlmacen(1 punto) */

function mostrarValorAlmacen()
{
    global $inventario;
    $valortotal = 0;
    foreach ($inventario  as $categoria => $comics) {
        foreach($comics as $comic){
        $valortotal += $comic ['precio'] * $comic['stock'];  

        }
       
    }
    echo "<p>Valor total del almacén: $valortotal €</p>";
}


/**2) Para la semana del “manga”. Aplica una rebaja del 30% a todos los productos
que tengan por idioma “japonés”.
a. Arreglar la función aplicarDescuentoManga() (1 punto) */
function aplicarDescuentoManga()
{
    global $inventario;

    foreach ($inventario['accion'] as &$comic) {
        if ($comic['idioma'] == 'Japonés') {
            $comic['precio'] =  $comic['precio'] - $comic['precio'] * 0.3; // Aplicar descuento del 30%
        }
    }
    foreach ($inventario['suspense_terror'] as &$comic) {
        if ($comic['idioma'] == 'Japonés') {
            $comic['precio'] = $comic['precio'] - $comic['precio'] * 0.3; // Aplicar descuento del 30%
        }  
    }
}
?>




</body>
</html>