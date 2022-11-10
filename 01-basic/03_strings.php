<?php

/**
 * Function strlen() - Retorna o tamanho de uma string
 * 
 */
echo strlen("Olá Mundo PHP") . PHP_EOL;


/**
 * Function str_word_count() - Retorna o número de palavras em uma string
 * 
 */
echo str_word_count("Olá Mundo PHP") . PHP_EOL;


/**
 * Function strrev() - Inverte uma string
 * 
 */
echo strrev("Olá Mundo PHP") . PHP_EOL;


/**
 * Function strpos() - Verifica um texto especifico de uma string.
 * Se a correspondência for encontrada, a função retornará a posição do caractere da primeira correspondência.
 * Se não, retornará false.
 * 
 */
echo strpos("Olá Mundo PHP", "PHP") . PHP_EOL;


/**
 * Function str_replace() - Substitui texto dentro de uma string
 * 
 */
echo str_replace("PHP",  "Composer", "Olá Mundo PHP") . PHP_EOL;