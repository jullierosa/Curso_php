<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis Referenciadas</title>
</head>
<body>
    <?php
    $a = 3;#variável $a recebe 3
    $b = &$a;/*quando coloco & na frente da variável, estou dizendo para $b ser uma referência a $a */
    $b += 5;/*$b vai ser (3+5=(8)), automaticamente $a passa a ter o mesmo valor de $b */
    echo "Valor da variavel a: $a";#mostra valor de $a na tela 
    echo "<br>Valor da variavel b:$b";#mostra valor de $b na tela
    ?>
</body>
</html>