<?php
date_default_timezone_set("America/Sao_Paulo");
$data = date("d/m/Y");
$hora = date('H:i:s');
$msg = "Hoje é " . $data . " e agora são " . $hora . "." ;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Hpra</title>
</head>
<body>
    <h1>Data e hpra do servidor</h1>
    <p><?php echo $msg ?></p>
</body>
</html>