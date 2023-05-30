<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("links.xml");
$x = $xmlDoc->getElementsByTagName("link");
$q = $_GET['q'];

// Busca todos os links do arquivo xml se o comprimento de q > 0
if (strlen($q) > 0) {
    $hint = "";

    for ($i = 0; $i < $x->length; $i++) {
        $title = $x->item($i)->getElementsByTagName("title");
        $url = $x->item($i)->getElementsByTagName("url");

        if ($title->item(0)->nodeType == 1) {

            // Encontra um link que corresponda ao texto de pesquisa
            if (stristr($title->item(0)->childNodes->item(0)->nodeValue, $q)) {
                if ($hint == "") {
                    $hint = "<a href='" . $url->item(0)->childNodes->item(0)->nodeValue . "' target='_blank'>" . 
                    $title->item(0)->childNodes->item(0)->nodeValue . "</a>";

                } else {
                    $hint = $hint . "</br><a href='" . $url->item(0)->childNodes->item(0)->nodeValue . "' target='_blank'>" . 
                    $title->item(0)->childNodes->item(0)->nodeValue . "</a>";
                }
            }
        }
    }
}

// Define a saída como "sem sugestão" se nenhuma dica for encontrada, caso sim, define sugestões.
if ($hint == "") {
    $response = "Sem sugestões";
} else {
    $response = $hint;
}

// Print da resposta
echo $response;