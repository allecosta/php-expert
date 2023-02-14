<?php

/**
 * A função fgets() é responsavel por ler uma única linha de um arquivo. 
 */

 $myfile = fopen('webdictionary.txt', 'r') or die("OPS! Não foi possivel abrir o arquivo.");

 echo fgets($myfile);

 fclose($myfile);