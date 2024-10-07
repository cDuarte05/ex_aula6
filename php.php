<?php
    $arqVisitantes = fopen("contVisita.txt","r+");
    $lerVisitas = fread($arqVisitantes,10);
    $contador= (int)$lerVisitas+1;
    echo "Você é o visitante número: $contador";
    fseek($arqVisitantes, 0); //fseek irá colocar o ponteiro no início do arquivo texto aberto
    fwrite($arqVisitantes, $contador); //Grava no arquivo texto o valor da variável contador
?>