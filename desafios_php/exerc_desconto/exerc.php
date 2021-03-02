<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Desconto</title>
</head>
<body>
    <?php 
    $val1 = $_GET["x"];
    echo "<h1>Descontos de 10%</h1>";
    echo "<b>O valor do produlto é R$</b>". number_format($val1,2,",",".");
    echo "<br>Aplicando um desconto de <b>10%</b>, você pagará R$:". number_format($val1-(0.1*$val1),2,",",".");
    ?>
</body>
</html>