<?php

function obtenerValoresParametros(string $url): array {

    // Buscar el signo de interrogacion
    $posicionPregunta = strpos($url, "?");

    if ($posicionPregunta === false) {
        return [];
    }

    // Obtener la parte que aparece despues de ?
    $cadenaParametros = substr(
        $url,
        $posicionPregunta + 1
    );

    // Quitar un posible fragmento que comienza con #
    $posicionNumeral = strpos($cadenaParametros, "#");

    if ($posicionNumeral !== false) {
        $cadenaParametros = substr(
            $cadenaParametros, 0, $posicionNumeral
        );
    }

    if ($cadenaParametros === "") {
        return [];
    }

    // Separar los parametros por &
    $parametros = explode("&", $cadenaParametros);

    $valores = [];

    foreach ($parametros as $parametro) {

        // Buscar el signo igual
        $posicionIgual = strpos($parametro, "=");

        if ($posicionIgual !== false) {

            // Extraer el valor que aparece despues de =
            $valor = substr(
                $parametro, $posicionIgual + 1
            );

            $valores[] = urldecode($valor);

        } else {
            $valores[] = "";
        }
    }

    return $valores;
}

$url = "https://ejemplourl.com?year=2023&challenge=0";

$resultado = obtenerValoresParametros($url);

echo json_encode(obtenerValoresParametros($url));

?>