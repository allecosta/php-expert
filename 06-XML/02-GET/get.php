<?php

 // Obtendo valores 
 $xml = simplexml_load_file("xfile.xml") or die ("OPS! Não foi possível criar objeto.");

 echo $xml->to . PHP_EOL;
 echo $xml->from . PHP_EOL;
 echo $xml->heading . PHP_EOL;
 echo $xml->body . PHP_EOL;



 // Obtendo valores de elementos especificos
 $xml = simplexml_load_file("zlibrary.xml") or die ("OPS! Não foi possível criar objeto.");

 echo $xml->book[0]->title . PHP_EOL;
 echo $xml->book[1]->title . PHP_EOL;



 // Obtendo valores atráves de loop
 $xml = simplexml_load_file("zlibrary.xml") or die ("OPS! Não foi possível criar objeto.");

 foreach ($xml->children() as $book) {
    echo $book->title . ", ";
    echo $book->author . ", ";
    echo $book->year . ", ";
    echo $book->price . PHP_EOL;
 }



 // Obtendo valores de atributos
 $xml = simplexml_load_file("zlibrary.xml") or die ("OPS! Não foi possível criar objeto.");

 echo $xml->book[0]['category'] . PHP_EOL;
 echo $xml->book[1]->title['lang'] . PHP_EOL;


 
 // Obtendo valores de atributos atráves de loop
 $xml = simplexml_load_file("zlibrary.xml") or die ("OPS! Não foi possível criar objeto.");

 foreach ($xml->children() as $book) {
    echo $book->author . PHP_EOL;
 }
