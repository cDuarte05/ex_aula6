<?php 
    $arquivoLer = fopen("dados.txt", "r");
    $conteudo = fread($arquivoLer,100);
    echo nl2br($conteudo);
    fclose($arquivoLer);
?>