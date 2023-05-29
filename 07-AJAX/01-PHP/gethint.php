<?php

$listNames = [
    "Ana",
    "Bianca",
    "Diana",
    "Cintia",
    "Evandro",
    "Fiona",
    "Gustavo",
    "Henrique",
    "Iris",
    "João",
    "Katia",
    "Lindinalva",
    "Nina",
    "Omar",
    "Perla",
    "Amanda",
    "Raquel",
    "Cindy",
    "Tania",
    "Marcos",
];

// Obtêm o parametro q da URL
$q = $_REQUEST['q'];
$hint = "";

// Busca todas as dicas no array se q for diferente de vazio
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);

    foreach ($listNames as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "Sem sugestão :-(" : $hint;

