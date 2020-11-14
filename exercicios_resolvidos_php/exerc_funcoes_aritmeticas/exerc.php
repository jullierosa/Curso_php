<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes Aritméticas</title>
</head>
<body>
    <?php 
     $v1 = $_GET["x"];//pegam valores personalizados 
     $v2 = $_GET["y"];//valores esses que estão na URL
     $v3 = $_GET["z"];
     echo "<h2>Valores Recebidos: $v1 / $v2 / $v3</h2>";
     echo "O Valor Absoluto de $v1 é ". abs($v1);
     echo "<br>O valor de $v1<sup>$v3</sup> é ". pow($v1, $v3);//potenciação
     echo "<br>A raiz quadrada de $v1 é ". sqrt($v1);
     echo "<br>O arredondamento de $v2 é ". round($v2);
     echo "<br>O valor inteiro de $v2 é ". intval($v2);
     echo "<br>O valor de $v1 em moeda é R$". number_format($v1,2, ",", ".")//formatar número em valor monetário
    ?>
</body>
</html>