<?php

/**
 * A função fopen() é utilizada para criar um arquivo. Essa é a mesma função utilizada para abrir arquivos.
 * O modo w => É responsavel pela escrita no arquivo.
 * 
 * A função fwrite() é utilizada para gravar em um arquivo
 * O primeiro parâmetro contém o nome do arquivo a ser gravado
 * O segundo parâmetro é a string a ser gravada. 
 */

 $myFile = fopen('starwars.txt', 'w') or die("OPS! Não foi possivel abrir o arquivo.");
 $listStarWars = "Leia Organa\n";
 
 //Gravando a primeira informação no aqruivo;
 fwrite($myFile, $listStarWars);

 $listStarWars = "Padmé Amidala\n";

 // Gravando a segunda informação no aqruivo;
 fwrite($myFile, $listStarWars);

 fclose($myFile);


 /**
  * O modo a => É reponsavel por adicionar informação ao final de um arquivo.
  */

  $myFile = fopen('starwars.txt', 'a') or die("OPS! Não foi possivel abrir o arquivo.");
  $listStarWars = "Han Solo\n";

  fwrite($myFile, $listStarWars);

  fclose($myFile);

