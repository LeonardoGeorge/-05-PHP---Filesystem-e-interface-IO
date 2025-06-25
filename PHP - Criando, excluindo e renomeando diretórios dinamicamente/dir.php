<?php

// mkdir - criar diretório
mkdir('teste');

$arquivo = fopen('teste/arquivo.txt', 'w');
fwrite($arquivo, 'Conteúdo do arquivo teste');


// rmdir - remover diretório
//rmdir('teste');



