<?php 
$nome = "Letícia";
$curso = "Técnico em Informática";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>
       <?php
       echo "Olá, Mundo!";
       ?>
   </h1>
   <p> Meu nome é <?php echo $nome ?>.</p>
   <p>Estou aprendendo PHP no curso de <?php echo $curso; ?>.</p>
</body>
</html>
