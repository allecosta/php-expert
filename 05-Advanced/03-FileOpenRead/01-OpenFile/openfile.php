<?php

/**
 * A função fopen() responsavel por abrir arquivos
 * 
 * O primeiro parâmetro (webdictionary.txt) contém o nome do arquivo a ser aberto
 * O segundo parâmetro (r => abre um arquivo somente para leitura) especifica em qual modo o arquivo deve ser aberto
 * 
 * A função fread() responsavel pela leitura de arquivos
 * 
 * O primeiro parâmetro contém o nome do arquivo a ser lido
 * O segundo parâmetro especifica o número máximo de bytes a serem lidos
 * 
 * A função fclose() é responsavel  por fechar um arquivo aberto.
 */

$myFile = fopen('webdictionary.txt', 'r') or die("OPS! Não foi possivel abrir o arquivo.");

echo fread($myFile, filesize('webdictionary.txt'));

fclose($myFile);