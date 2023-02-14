<?php

/**
 * A função feof() verifica se o final do arquivo foi atingindo
 * É útil para percorrer dados de comprimento desconhecido. 
 */

 $myfile = fopen('webdictionary.txt', 'r') or die("OPS! Não foi possivel abrir o arquivo.");

 while(!feof($myfile)) {
    echo fgets($myfile) . PHP_EOL;
 }

 fclose($myfile);