<?php

require_once("human.php");

$entidades = new Humanos();

$entidades->definir('m', "Abraão");
$entidades->definir('f', "Marias");
$entidades->definir('d', "Erick");
$entidades->definir('m', "Caio");
$entidades->definir('m', "Oskar");
$entidades->definir('m', "Joseph");
$entidades->definir('f', "Josivana");
$entidades->definir('f', "Patricia");
$entidades->definir('m', "GILDASIO");
$entidades->definir('m', "Walmisson");
$entidades->definir('d', "Wendel");
$entidades->definir('d', "teste");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Masculinos</h1>
    <ul>
        <?php foreach ($entidades->returnMasculinos()["nome"] as $chave) : ?>
            <li><?php echo $chave ?></li>
        <?php endforeach; ?>
    </ul>
    <h1>Femininos</h1>
    <?php foreach ($entidades->returnFemininos()["nome"] as $chave) : ?>
        <li><?php echo $chave ?></li>
    <?php endforeach; ?>
    <h1>Desconhecidos</h1>
    <?php foreach ($entidades->returnDesconhecidos()["nome"] as $chave) : ?>
        <li><?php echo $chave ?></li>
    <?php endforeach; ?>
</body>

</html>