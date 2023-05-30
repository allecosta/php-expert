<?php

$q = $_GET['q'];

// Instanciando a classe DOMDocument
$xmlDoc = new DOMDocument();

// Carregando o arquivo catalog.xml
$xmlDoc->load("catalog.xml");

// Localizando todos os elementos "ARTIST"
$x = $xmlDoc->getElementsByTagName("ARTIST");

for ($i = 0; $i <= $x->length - 1; $i++) {

    // Processando o nó dos elementos
    if ($x->item($i)->nodeType == 1) {
        if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
            $y = ($x->item($i)->parentNode);
        }
    }
}

$album = ($y->childNodes);

for ($i = 0; $i < $album->length; $i++) {

    // Processando o nó dos elementos, e retorna o resultado HTML
    if ($album->item($i)->nodeType == 1) {
        echo "<strong>" . $album->item($i)->nodeName . ":</strong>";
        echo $album->item($i)->childNodes->item(0)->nodeValue;
        echo "</br>";
    }
}