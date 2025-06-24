<?php
// Abrindo o arquivo nomes.txt leitura 
// Fwrite é usado para escrever dados em um arquivo
// Truncar o arquivo significa que ele será esvaziado antes de escrever novos dados
// append - Acrescentar e cria um arquivo se ele não existir.
$arquivo = fopen("cidade.txt", "a");


fwrite($arquivo, "Conchal");

fclose($arquivo); // Fecha o arquivo


?>