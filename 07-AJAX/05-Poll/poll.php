<?php 

// Obtêm o parametro vote da URL
$vote = $_REQUEST['vote'];

// Obtêm o conteúdo do arquivo de texto
$filename = "result.txt";
$content = file($filename);

// Coloca o conteúdo em um array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
    $yes += 1;
}

if ($vote == 1) {
    $no += 1;
}

// Insere votos no arquivo result.txt
$insertVote = $yes . "||" . $no;
$fp = fopen($filename, "w");

fputs($fp, $insertVote);
fclose($fp);