<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano Atual</title>
</head>
<body>
    <?php
    $atual = $_GET["a"];
    echo "<h2><b>O ano atual é $atual</b><h2>";
    echo "<br>O ano anterior é " . --$atual; // pré-incremento
    ?>
</body>
</html>