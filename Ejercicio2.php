<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lenguaje Hacker</title>
</head>

<body>

    <form action="" method="post">
        <label for="frase">Ingrese la frase:</label>
        <input type="text" name="frase" id="frase" required>
        <input type="submit" value="Transformar" name="enviar">
    </form>

    <?php

    $alfabeto = array(
        'a' => '4',
        'b' => '13',
        'c' => '[',
        'd' => ')',
        'e' => '3',
        'f' => '=',
        'g' => '&',
        'h' => '#',
        'i' => '1',
        'j' => ',_|',
        'k' => '>|',
        'l' => '1',
        'm' => '|\/|',
        'n' => '|\|',
        'o' => '0',
        'p' => '|*',
        'q' => '(_,)',
        'r' => '12',
        's' => '5',
        't' => '7',
        'u' => '|_|',
        'v' => '\/',
        'w' => '\/\/',
        'x' => '><',
        'y' => 'j',
        'z' => '2',

        '1' => 'L',
        '2' => 'R',
        '3' => 'E',
        '4' => 'A',
        '5' => 'S',
        '6' => 'b',
        '7' => 'T',
        '8' => 'B',
        '9' => 'g',
        '0' => 'o'
    );

    function lenguajeHacker(string $palabra, array $alfabeto): string
    {
        $salida = "";
        $palabra = strtolower($palabra);

        for ($i = 0; $i < strlen($palabra); $i++) {

            if (array_key_exists($palabra[$i], $alfabeto)) {
                $salida .= $alfabeto[$palabra[$i]];
            } else {
                $salida .= $palabra[$i];
            }
        }

        return $salida;
    }

    if (isset($_POST['enviar'])) {

        $textoDeFormulario = $_POST['frase'];

        $resultado = lenguajeHacker($textoDeFormulario, $alfabeto);

        echo "<h3>Texto transformado:</h3>";
        echo "<p>" . htmlspecialchars($resultado, ENT_QUOTES, 'UTF-8') . "</p>";
    }

    ?>

</body>

</html>