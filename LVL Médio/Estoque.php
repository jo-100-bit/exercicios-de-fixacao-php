<?php
$estoque = [
    ["modelo" => "Onix", "qtd" => 15],
    ["modelo" => "Polo", "qtd" => 8],
    ["modelo" => "HB20", "qtd" => 12]
];

// Extrai apenas a coluna 'qtd' e soma tudo
$totalGeral = array_sum(array_column($estoque, 'qtd'));

echo "Total: " . $totalGeral;
?>