<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Idênticos</title>
</head>
<body>
    <?php
        $a = 3;
        $b = "3";
        $r = $a==$b?"SIM":"NÃO";
        $i = $a===$b?"SIM":"NÃO";
        echo "As variáveis A e B são iguais? $r";
        echo "<br>As variáveis A e B são idênticos? $i";
    ?>
</body>
</html>