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

while (!feof($arquivo)) {
    $nome = fgets($arquivo); // Lê uma linha do arquivo
    echo $nome . "<br>"; // Exibe o nome lido
}

fclose($arquivo); // Fecha o arquivo
echo "<br>Arquivo fechado com sucesso!<br>";

?>