<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora de IMC</title>
</head>
<body>
<?php

function calcularIMC() {
    $altura = str_replace(',', '.', $_REQUEST['altura']);
    $peso = $_REQUEST['peso'];
    return $peso / ($altura * $altura);
}
?>



<h1>Seu IMC é <?php echo calcularIMC() ?></h1>
</body>
</html>
