<?php
// Abrindo o arquivo nomes.txt para leitura
$arquivo = fopen("nomes.txt", "r");
if ($arquivo) {
    echo "Arquivo aberto com sucesso!<br>";
} else {
    echo "Erro ao abrir o arquivo!<br>";
}


$bytes = filesize("nomes.txt");


/*
$nomes = fread($arquivo, $bytes); // Lê o arquivo inteiro
*/

$nome1 = fgets($arquivo); // Lê a primeira linha do arquivo
$nome2 = fgets($arquivo); // Lê a segunda linha do arquivo
$nome3 = fgets($arquivo); // Lê a terceira linha do arquivo


echo $nome1 . "<br>";
echo $nome2 . "<br>";
echo $nome3 . "<br>";

fclose($arquivo); // Fecha o arquivo
echo "<br>Arquivo fechado com sucesso!<br>";

?>