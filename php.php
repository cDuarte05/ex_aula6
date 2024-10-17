<?php 
    $prontuario = $_POST["prontuario"];
    $nome = $_POST["nome"];
    $notaProva = $_POST["prova"];
    $notaTrabalho = $_POST["trabalho"];
    $media = ($notaProva + $notaTrabalho)/2;

    if($media >=6){
        $media = "APROVADO";
    }else{
        $media = "RECUPERACAO";
    }

    $arquivoDados = fopen("dados.txt", "a");
    //Para formar os titulos estilo de tabela
    fwrite($arquivoDados,"\tProntuario\t\tNome\t\tNota1\t\tNota2\t\tResultado");
    //para monstrar os dados no estilo tabela
    $escrita = "\n\t$prontuario\t\t$nome\t\t$notaProva\t\t$notaTrabalho\t\t$media";
    fwrite($arquivoDados,$escrita);
    fclose($arquivoDados);

    echo "Dados Salvo com sucesso";

    echo '<br><br><input type="button" onclick="window.location.href=\'index.php\'" value="Retornar ao menu">';
?>