<?php
// Filesystem
//f(fopnen, fclose, fread, fgets, file_exists,
// is_file, is_dir, unlink, rename, copy, mkdir, rmdir) 
// Ler um arquivo de texto e exibir seu conteúdo
// Abrindo o arquivo nomes.txt para leitura 
// Verifica se o arquivo existe
/* 
Segundo parametro é o modo de abertura do arquivo 
    - "r" - Abre o arquivo para leitura. O ponteiro do arquivo é colocado no início do arquivo.
    - "w" - Abre o arquivo para escrita. Se o arquivo já existir, ele será truncado (apagado) para zero bytes. Se o arquivo não existir, ele será criado.   
    - "a" - Abre o arquivo para escrita. O ponteiro do arquivo é colocado no final do arquivo, ou seja, os dados serão adicionados ao final do arquivo. Se o arquivo não existir, ele será criado.
    - "x" - Cria um novo arquivo para escrita. Se o arquivo já existir, a chamada falhará e retornará um erro.
    - "r+" - Abre o arquivo para leitura e escrita. O ponteiro do arquivo é colocado no início do arquivo.
*/
// resource = recurso

// Path = caminho do arquivo
// Realpath = caminho absoluto do arquivo   
// Relative Path = caminho relativo do arquivo
$relativePath = "./dados/nomes.txt"; // Caminho relativo
$absolutePath = realpath($relativePath); // Caminho absoluto


$arquivo = fopen($relativePath, "a");

fwrite($arquivo, "\n");
fwrite($arquivo, "Novo Nome Adicionado");

echo $absolutePath . "<br>";




?>