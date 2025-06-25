<?php

// mkdir - criar diretório
mkdir('teste');

$arquivo = fopen('teste/arquivo.txt', 'w');
fwrite($arquivo, 'Conteúdo do arquivo teste');


// rmdir - remover diretório
//rmdir('teste');

// rename - renomear diretório
rename('teste', 'teste2');

