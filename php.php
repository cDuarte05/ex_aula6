<?php 
    $prontuario = $_POST["prontuario"];
    $nome = $_POST["nome"];
    $notaProva = $_POST["prova"];
    $notaTrabalho = $_POST["trabalho"];
    $media = ($notaProva + $notaTrabalho)/2;

    if($media >=6){
        $media = "APROVADO";
    }else{
        $media = "RECUPERAÇÃO";
    }

    $arquivoDados = fopen("C:\xampp\htdocs\ex_aula6\dados.txt", "a");
    //Para formar os titulos estilo de tabela
    fwrite($arquivoDados,"<b>Prontuario\tNome\tNota1\tNota2\tResultado</b>");
    //para monstrar os dados no estilo tabela
    $escrita = "$prontuario\t$nome\t$notaProva\t$notaTrabalho\t$media";
    fwrite($arquivoDados,$escrita);
    fclose($arquivoDados);

    echo "Dados Salvo com sucesso";

    echo '<input type="button" onclick="window.location.href=\'index.php\'" value="Retornar ao menu">';
?>