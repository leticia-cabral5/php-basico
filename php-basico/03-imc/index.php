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