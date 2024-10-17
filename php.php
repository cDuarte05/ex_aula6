<?php 
    $prontuario = $_POST["prontuario"];
    $nome = $_POST["nome"];
    $notaProva = $_POST["prova"];
    $notaTrabalho = $_POST["trabalho"];
    $media = ($notaProva + $notaTrabalho) / 2;

    if ($media >= 6) {
        $resultado = "APROVADO";
    } else {
        $resultado = "RECUPERAÇÃO";
    }


    $arquivoDados = fopen("dados.txt", "a");
    if (filesize("dados.txt") == 0) { //confere se está vazio para escrever o cabeçalho no arquivo txt
        fwrite($arquivoDados, "Prontuário\tNome\tNota Prova\tNota Trabalho\tResultado\n");
    } 


        fwrite($arquivoDados, "$prontuario\t$nome\t$notaProva\t$notaTrabalho\t$resultado\n");
        fclose($arquivoDados);
        echo "Dados salvos com sucesso!";

    echo '<br><br><input type="button" onclick="window.location.href=\'index.php\'" value="Retornar ao menu">';
?>
