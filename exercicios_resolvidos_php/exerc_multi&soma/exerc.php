<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma ou Multiplicação</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"]; 
        echo "Os valores foram $n1 e $n2";
        $r = ($tipo == "s")?$n1+$n2:$n1*$n2;// se eu colocar o valor "s" em "op", será verdadeiro e fará a soma. Se colocarmos outra letra automaticamente será feito a multiplicação.Isso pq o operador unário não é uma estrutura condicional completa, ele apenas faz comparações básicas de 2 valores.
        echo " O resultado será $r";
    ?>
</body>
</html>