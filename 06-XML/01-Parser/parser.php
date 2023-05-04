<?php

/**
 * A linguagem XML é uma forma de estruturar dados para compartilhamento entre sites na web
 * Tecnologias como RSS feed e Podcasts são escritas em XML
 * 
 * simpleXML é uma extensão PHP que nos permite manipular e obter dados XML.
 */

 $xmlData = "<?xml version='1.0' encoding='utf-8' ?>
    <note>
        <to>João</to>
        <from>Maria</from>
        <heading>Lembre-se</heading>
        <body>Estaremos juntos nestes novos desafios!</body>
    </note>";

$xml = simplexml_load_string($xmlData) or die ("OPS! Não foi possível criar objeto.");

print_r($xml);



// Verificando erros  
libxml_use_internal_errors(true);

$xmlData = "<?xml version='1.0' encoding='utf-8' ?>
    <document>
        <user>João</u_ser>
        <email>joao@hostmail.com</e_mail>
    </document>";

$xml = simplexml_load_string($xmlData);

if ($xml === false) {
    echo "Falha no carregamento do XML" . PHP_EOL;

    foreach (libxml_get_errors() as $error) {
        echo $error->message . PHP_EOL;
    }
} else {
    print_r($xml);
}


// Lendo informações do arquivo xfile.xml
$xml = simplexml_load_file("xfile.xml") or die ("OPS! Não foi possível criar objeto.");

print_r($xml);