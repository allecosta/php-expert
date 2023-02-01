<?php

/**
 * A cláusula LIMIT é utilizada para especificar o número de registros a serem retornados.
 * 
 */

 // Selecionado todos os registros de 1 a 60
 $sqlQuery = "SELECT * FROM orders LIMIT 60";

 // Selecionando registros de 16 a 25
 $sqlQuery = "SELECT * FROM orders LIMIT 10 OFFSET 15";

 // Segue o mesmo resultado da query especificada acima
 $sqlQuery = "SELECT * FROM orders LIMIT 15, 10";



