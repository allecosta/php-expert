<?php

/**
 * JSON - Significa JavaScript Object Notation, é uma sintaxe para armazenar e trocar dados
 * 
 * Como este formato é baseado em texto, ele pode ser facilmente enviado de e para um servidor
 * É usado como formato de dados por qualquer linguagem.
 * 
 * json_encode() - Função que codifica valor/s para o formato JSON.
 */

 // Codificando um array associativo em um objeto JSON
 $age = [
    'Marks' => 44,
    'Ythalo' => 43,
    'Wagner' => 45,
    'Alisson' => 43 
 ];

 echo json_encode($age);

 // Codificando um array indexado em um array JSON
 $name = ['Marks', 'Ythalo', 'Wagner', 'Alisson'];

 echo json_encode($name);

 

/**
 * json_decode() - Função que decodifica objeto/s JSON em objeto PHP ou um array associativo
 * 
 * A função retorna um objeto por padrão
 * Possui um segundo parâmentro e quando definido como true, os objetos JSON são decodificados em arrays associativos.
 */

 // Decodificando dados JSON em um objeto
 $jsonObject = '{"MArks": 44, "Ythalo": 43, "Wagner": 45, "Alisson": 43}';

 print_r(json_decode($jsonObject));

 // Decodificando dados JSON em um array associativo
 $jsonObject = '{"Luke": 35, "Lea": 35, "Solo": 43}';

 $list = json_decode($jsonObject, true);

 print_r($list);

 // Acessando valores decodificados de um objeto 
 $jsonObject = '{"Luke": 35, "Lea": 35, "Solo": 43}';

 $list = json_decode($jsonObject);

 echo $list->Luke;
 echo $list->Lea;
 echo $list->Solo;

 // Acessando os valores de um array associativo
 $jsonObject = '{"Luke": 35, "Lea": 35, "Solo": 43}';

 $list = json_decode($jsonObject, true);

 echo $list['Luke'];
 echo $list['Lea'];
 echo $list['Solo'];

 // Percorrendo chave e valores de um objeto
 $city = '{"Sergipe": "SE", "São Paulo": "SP", "Minas": "BH"}';

 $list = json_decode($city);

 foreach ($list as $key => $value) {
    echo $key . " => " . $value . PHP_EOL;
 }

 // Percorrendo os valores de um array associativo
 $city = '{"Sergipe": "SE", "São Paulo": "SP", "Minas": "BH"}';

 $list = json_decode($city, true);

 foreach ($list as $value) {
    echo "Cidade => " . $value . PHP_EOL;
 }

