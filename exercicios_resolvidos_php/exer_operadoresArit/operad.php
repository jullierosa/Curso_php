<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <?php 
    $n1 = $_GET["a"]; //passando valor personalizado de A pela URL
    $n2 = $_GET["b"]; //passando valor personalizado de B pela URL
    echo "<h1>VALORES RECEBIDOS: $n1 e $n2</h1>";
    echo "A soma vale ". ($n1+$n2);
    echo "<br>A subtração vale ". ($n1-$n2);
    echo "<br>A multiplicação vale ". ($n1*$n2);
    echo "<br>A divisão vale ". ($n1/$n2);
    echo "<br>O módulo vale ". ($n1%$n2); // o resto da divisão
    echo "<br>A média dos 2 valores são ". ($n1+$n2)/2;
    ?>
</body>
</html>