<?php

/**
 * O parser expat é um analisador baseado em eventos
 * Com o XML expat é possivel processar documentos XML em PHP. 
 */

 // Inicializando o XML parser
 $parser = xml_parser_create();

 // Função para utilizar na inicialização de um elemento
 function start($parser, $elementName) 
 {
    switch ($elementName) {
        case "TO":
            echo "To: ";
            break;
        case "FROM":
            echo "From: ";
            break;
        case "HEADING":
            echo "Heading: ";
            break;
        case "BODY":
            echo "Message: ";
    }
 }

 // Função para utilizar no final de um elemento
 function stop($parser, $elementName) 
 {
    echo PHP_EOL;
 }

 // Função para utilizar quando encontrar caracteres
 function char($parser, $data) 
 {
    echo $data;
 }

 // Especificando qual função será executada quando o analisador encontrar as tags de abertura e fechamento
 xml_set_element_handler($parser, "start", "stop");
 
 // Especificando qual função será executada quando o analisador encontrar caractere
 xml_set_character_data_handler($parser, "char");

 // Abrindo um arquivo XML
 $fp = fopen("xfile.xml", "r");

 
 /**
  * Analisando o arquivo xfile.xml com a função xml_parse()
  * Em caso de erro, convertendo o erro XML em uma descrição de texto com a função xml_error_string()
  * Obtendo o codigo de erro com a função xml_get_error_code()
  */
 while ($data = fread($fp, 4096)) {
    xml_parse($parser, $data, feof($fp)) or die (sprintf("Erro no XML: %s na linha %d",
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)));
 }

 // Liberando o analisador XML
 xml_parser_free($parser);