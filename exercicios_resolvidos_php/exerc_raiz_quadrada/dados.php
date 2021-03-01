<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
</head>
<body>
    <?php
        $valor = $_GET["v"];#numero enviado pela URL
        echo "O valor digitado e enviado foi $valor";
        echo "</br><b>A RAIZ QUADRADA de $valor é </b>" . number_format (sqrt($valor),2);#number_format deixa a resposta da raiz quadrada menor.
    ?>
    <a href="exerc.html">voltar</a>
</body>
</html>