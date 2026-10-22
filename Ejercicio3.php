<?php

// ARRAY ASOCIATIVO CON 5 PRODUCTOS
$productos = array(

    "producto1" => array(
        "codigo" => "P001",
        "nombre" => "Tablet",
        "categoria" => "Tecnologia",
        "precio" => 250000,
        "stock" => 4
    ),

    "producto2" => array(
        "codigo" => "P002",
        "nombre" => "Laptop",
        "categoria" => "Computadores",
        "precio" => 780000,
        "stock" => 6
    ),

    "producto3" => array(
        "codigo" => "P003",
        "nombre" => "Telefono",
        "categoria" => "Telefonia",
        "precio" => 800000,
        "stock" => 10
    ),

    "producto4" => array(
        "codigo" => "P004",
        "nombre" => "Teclado",
        "categoria" => "Accesorios",
        "precio" => 90000,
        "stock" => 15
    ),

    "producto5" => array(
        "codigo" => "P005",
        "nombre" => "Mouse",
        "categoria" => "Accesorios",
        "precio" => 45000,
        "stock" => 20
    )

);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Base de datos</title>
</head>
<body>

    <h1>Base de datos de productos</h1>

    <?php

    // RECORRER EL ARRAY ASOCIATIVO
    foreach ($productos as $producto) {

        echo "<hr>";

        echo "Codigo: " . $producto["codigo"] . "<br>";
        echo "Nombre: " . $producto["nombre"] . "<br>";
        echo "Categoria: " . $producto["categoria"] . "<br>";
        echo "Precio: $" . $producto["precio"] . "<br>";
        echo "Stock: " . $producto["stock"] . "<br>";

    }

    ?>

</body>
</html>