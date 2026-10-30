<?php
$peso = 70.0;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $classe = "Abaixo do peso";

} elseif ($imc < 25) {
    $classe = "Peso normal";

} elseif ($imc < 30) {
    $classe = "Sobrepeso";

} elseif ($imc < 35) {
    $classe = "Obesidade grau I";

} elseif ($imc < 40) {
    $classe = "Obesidade grau II";

} else {
    $classe = "Obesidade grau III";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<h1>Calculadora de IMC</h1>
<p>Peso: <?php echo $peso ?></p>
<p>Altura: <? echo $altura ?></p>
<p>IMC: <strong><?php echo $imc ?></strong></p>
<p>Classificação: <strong><?php echo $classe?></strong></p>
<body>
    
</body>
</html>