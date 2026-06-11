<?php

// 1. Criamos o array multidimensional (Matriz)
$estoque = [
    ["produto" => "Teclado Mecânico", "preco" => 250.00, "quantidade" => 10],
    ["produto" => "Mouse Gamer",      "preco" => 150.00, "quantidade" => 15],
    ["produto" => "Monitor 144Hz",    "preco" => 1200.00, "quantidade" => 5],
    ["produto" => "Headset USB",      "preco" => 300.00, "quantidade" => 8]
];

$valorTotalEstoque = 0;

echo "### Relatório de Inventário ###\n";
echo str_repeat("-", 40) . "\n";

// 2. Percorremos o array para calcular os valores
foreach ($estoque as $item) {
    $subtotal = $item['preco'] * $item['quantidade'];
    $valorTotalEstoque += $subtotal;

    echo "Produto: " . str_pad($item['produto'], 20) . 
         " | Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "\n";
}

echo str_repeat("-", 40) . "\n";
// 3. Exibimos o resultado final
echo "VALOR TOTAL DO ESTOQUE: R$ " . number_format($valorTotalEstoque, 2, ',', '.') . "\n";

?>