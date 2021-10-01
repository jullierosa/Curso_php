<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>média escolar</title>
</head>
<body>
    <?php
    $nome = $_GET["n"];//nome passado pela URL
    /*As notas também foram passadas pela URL */
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];
    $n3 = $_GET["z"];
    $m =  ($n1+$n2+$n3)/3;//média calculada
    echo "<h1>Notas Escolares</h1>";
    echo "$nome, a média entre $n1, $n2 e $n3 é $m";
    $res = $m >= 6?"aprovado":"reprovado";
    echo "<br> E voce está $res";
    ?>
</body>
</html>