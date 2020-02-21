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
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "O valor enviado é $valor";
    echo " A Raiz quadrada de $valor é $rq";

    ?>
    <a href="01exercicio.html">Voltar</a>
</div>
</body>
</html>