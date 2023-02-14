<?php

/**
 * A função fgetc() é utilizada para ler um único caractere de um arquivo.
 */

 $myFile = fopen('webdictionary.txt' , 'r') or die("OPS! Não foi possivel abrir o arquivo.");

 while (!feof($myFile)) {
    echo fgetc($myFile);
 }

 fclose($myFile);