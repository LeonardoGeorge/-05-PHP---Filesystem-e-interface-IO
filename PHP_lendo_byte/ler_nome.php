<?php
// Abrindo o arquivo nomes.txt para leitura
$arquivo = fopen("nomes.txt", "r");
if ($arquivo) {
    echo "Arquivo aberto com sucesso!<br>";
} else {
    echo "Erro ao abrir o arquivo!<br>";
}

// Ler o conteúdo do arquivo
$nomes = fread($arquivo, 1000); // Lê até 1000 bytes do arquivo
print_r($nomes);

fclose($arquivo); // Fecha o arquivo
echo "<br>Arquivo fechado com sucesso!<br>";

?>