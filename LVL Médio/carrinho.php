<?php
$produtos = [
    ["nome" => "Teclado", "preco" => 150.00],
    ["nome" => "Mouse", "preco" => 80.00],
    ["nome" => "Monitor", "preco" => 900.00]
];

$total = 0;

foreach ($produtos as $item) {
    $total += $item['preco'];
}

echo "Total da compra: R$ " . number_format($total, 2, ',', '.');
?>