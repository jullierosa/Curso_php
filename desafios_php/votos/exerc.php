<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votos</title>
</head>
<body>
    <?php
     $id = $_GET["id"];
     $ano = $_GET["a"];
     echo "Você nasceu em " . ($ano-$id);
     echo "<br>Você tem $id anos";
     echo "<br>Voce " . (($id>=18 && $id<65)?"é obrigado a votar":"não é obrigado a votar ");
    ?>
</body>
</html>