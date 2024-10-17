<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<?php 
    $arquivoLer = fopen("dados.txt", "r");

    // Pular a primeira linha
    fgets($arquivoLer);
    
    // Verificando se o arquivo foi aberto corretamente
    if ($arquivoLer) {
        echo "<table border='1'>";
        echo "<tr>
                <th>Prontuário</th>
                <th>Nome</th>
                <th>Nota Prova</th>
                <th>Nota Trabalho</th>
                <th>Resultado</th>
              </tr>";
        
        // Para ler o arquivo linha por linha
        while (($linha = fgets($arquivoLer)) !== false) {
            $dados = explode("\t", $linha); //divide a string em partes usando o delimitador especificado, no caso o \t e retorna um vetor
            // Verificando se há dados suficientes antes de renderizar
            if (count($dados) >= 5) { //a funcao count retorna o tamanho do vetor e então verifica se o tamanho
                echo "<tr>
                        <td>{$dados[0]}</td> 
                        <td>{$dados[1]}</td>
                        <td>{$dados[2]}</td>
                        <td>{$dados[3]}</td>
                        <td>{$dados[4]}</td>
                      </tr>"; //aqui os dados formam uma linha. As chaves servem para mostrar onde começa e termina as variaveis
            }
        }
        echo "</table>";
        
        // Fechando o arquivo
        fclose($arquivoLer);
        echo '<br><br><input type="button" onclick="window.location.href=\'index.php\'" value="Retornar ao menu">';

    } else {
        echo "Erro ao abrir o arquivo!";
    }
?>
</body>
</html>

