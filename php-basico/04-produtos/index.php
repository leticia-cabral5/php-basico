<?php
$produtos = [
    ["nome" => "Teclado mecanico", "preco" => 249.90, "estoque" => 12],
    ["nome" => "Mouse sem fio", "preco" => 79.50, "estoque" => 30],
    ["nome" => "Headset gamer", "preco" => 159.90, "estoque" => 15],
    ["nome" => "Webcam HD", "preco" => 119.90, "estoque" => 0],
    ["nome" => "Mousepad", "preco" => 39.90, "estoque" => 25],
    ["nome" => "Pen drive 32GB", "preco" => 29.90, "estoque" => 40],
];

$total = 0;

foreach ($produtos as $produto) {
    $total += $produto["preco"] * $produto["estoque"];
}

$quantidade = count($produtos);

function formatarPreco(float $valor): string {
    return "R$ " . number_format($valor, 2, ",", ".");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>

<body>

    <h1>Lista de produtos</h1>

    <table border="1" cellpadding="6">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($produtos as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item["nome"]) ?></td>
                    <td><?= formatarPreco($item["preco"]) ?></td>
                    <td><?= $item["estoque"] ?></td>
                    <td><?= $item["estoque"] > 0 ? "Disponível" : "Esgotado" ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <?= $quantidade ?> produtos cadastrados.
        Valor total em estoque: <?= formatarPreco($total) ?>
    </p>

</body>
</html>