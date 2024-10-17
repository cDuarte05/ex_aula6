<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "body-index"></div>
    <h1>Bem vindo</h1>
    <p>Selecione a opção desejada: </p>
    <div class="menu">
        <input type="button" onclick ="window.location.href='gravar.html'" value="Gravar dados" >
        <input type="button" onclick = "window.location.href='leitura.php'" value="Ver dados">
    </div>

    <!-- CONTADOR DE VISITAS -->
<?php
    $arqVisitantes = fopen("contVisita.txt","r+");
    $lerVisitas = fread($arqVisitantes,10);
    $contador= (int)$lerVisitas+1;
    echo "Você é o visitante número: $contador";
    fseek($arqVisitantes, 0); //fseek irá colocar o ponteiro no início do arquivo texto aberto
    fwrite($arqVisitantes, $contador); //Grava no arquivo texto o valor da variável contador
?>

</body>
</html>
