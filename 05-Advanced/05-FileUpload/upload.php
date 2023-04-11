<?php

/**
 * É necessario configurar o php.ini para permitir uploads de arquivos
 * 
 * file_uploads = On 
 * 
 * Caso seja necessario, deverá ampliar a memoria para subir tamanho de arquivos maiores
 * Isso também é configurado no php.ini que vem definido por padrão com 512M ou 528M
 * 
 * memory_limit = 512M 
 */

 // Diretorio onde o arquivo será colocado 
$dir = "uploads/";

// Caminho do arquivo a ser carregado
$file = $dir . basename($_FILES['fileToUpload']['name']);

$uploadOk = true;

// Extensão do arquivo em letras minusculas (strtolower) 
$imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));


// Verificando se o arquivo é uma imagem ou não
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);

    if ($check !== false) {
        echo "Imagem - " . $check['mime'] . ".";
        $uploadOk = true;
    } else {
        echo "OPS! Este arquivo não é uma imagem.";
        $uploadOk = false;
    }
}

// Verificando a existência de um arquivo
if (file_exists($file)) {
    echo "OPS! Este arquivo já existe.";
    $uploadOk = false;
}

// Verificando se o tamanho do arquivo é maior que 500 KB
if ($_FILES['fileToUpload']['size'] > 500000) {
    echo "OPS! Este arquivo é muito grande.";
    $uploadOk = false;
}

// Verificando os tipos de arquivos
if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {
    echo "OPS! São permitidos somente arquivos JPG, PNG, JPEG ou GIF.";
    $uploadOk = false;
}

// Verificando se a variavel uploadOk está sendo definida como false devido a erros no upload, se nao, o upload irá ser realizado
if ($uploadOk == false) {
    echo "OPS! Seu arquivo não foi carregado.";
} else {
    $move = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $file);

    if ($move) {
        echo "O arquivo: " . htmlspecialchars(basename($_FILES['fileToUpload']['name'])) . " foi carregado com sucesso."; 
    } else {
        echo "OPS! Ocorreu um erro ao realizar o upload do arquivo(s).";
    }
}

