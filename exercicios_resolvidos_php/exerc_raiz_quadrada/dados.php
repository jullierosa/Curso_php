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
        $valor = $_GET["v"];
        echo "O valor digitado e enviado foi $valor";
        echo "</br><b>A RAIZ QUADRADA de $valor é </b>" .sqrt($valor);
    ?>
</body>
</html>