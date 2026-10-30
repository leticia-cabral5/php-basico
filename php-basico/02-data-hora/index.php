<?php
date_default_timezone_set("America/Sao_Paulo");

$data = date("d/m/Y");
$hora = date('H:i:s');

$horaAtual = (int) date("H");

if ($horaAtual < 12) {
    $saudacao = "Bom dia!";
} elseif ($horaAtual < 18) {
    $saudacao = "Boa tarde!";
} else {
    $saudacao = "Boa noite!";
}

$msg = $saudacao . " Hoje é " . $data . " e agora são " . $hora . ".";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Hora</title>
</head>
<body>
    <h1>Data e hora do servidor</h1>
    <p><?php echo $msg; ?></p>
</body>
</html>