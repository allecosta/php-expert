<?php

/**
 * O DOM é uma classe nativa do PHP, sendo possivel processar documentos XML
 * Este analisador é baseado em árvore, ou seja, analisa um documento XML como uma estrutura de árvore.
 * 
 * <?xml version ="1.0" encoding ="utf-8" ?>
 * <from>João</from>
 * 
 * Nivel 1: Documento XML
 * Nivel 2: Elemento raiz: <from>
 * Nivel 3: Elemento de texto: "João"
 */

 // Inicializando e carregando um arquivo xfile.xml
 $xmlDOM = new DOMDocument();
 $xmlDOM->load("xfile.xml"); 

 // Colocando o documento em uma string para leitura
 print $xmlDOM->saveXML();


 
// Inicializando, carregando e percorrendo um arquivo xfile.xml
$xmlDOM = new DOMDocument();
$xmlDOM->load("xfile.xml");

$xfile = $xmlDOM->documentElement;

foreach ($xfile->childNodes as $item) {
    print $item->nodeName . " -> " . $item->nodeValue . PHP_EOL;
}