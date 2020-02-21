<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Aula_PHP_ Guanabara </title>
</head>
<body>
<div>
    <?php

    $nome = isset($_GET["nome"]) ?$_GET["nome"]:"[não informado]";
    $ano = isset ($_GET ["ano"]) ?$_GET["ano"] : "[Não Informado]";
    $sexo = isset ($_GET["sexo"])  ?$_GET["sexo"] : "[sem sexo]";
    $idade = date("Y") - $ano;
    echo "$nome é $sexo e tem $idade anos ";

    ?>
    <a href="aula0802.html">Voltar</a>
</div>
</body>
</html>