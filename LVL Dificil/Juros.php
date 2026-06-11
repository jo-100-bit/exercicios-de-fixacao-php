<?php

/**
 * Calcula o montante final de um investimento com juros compostos.
 * * @param float $capital Capital inicial (P)
 * @param float $taxa Taxa de juros em porcentagem (ex: 5 para 5%)
 * @param int $tempo Número de períodos (meses, anos...)
 * @return float Montante final formatado
 */
function calcularJurosCompostos($capital, $taxa, $tempo) {
    // 1. Converter a taxa de porcentagem para decimal (ex: 5% -> 0.05)
    $i = $taxa / 100;

    // 2. Aplicar a fórmula: M = P * (1 + i) ^ n
    // A função pow() do PHP eleva a base ao expoente
    $montante = $capital * pow((1 + $i), $tempo);

    return $montante;
}

// --- Exemplo de Uso ---
$cap = 1000.00; // R$ 1.000,00
$tax = 2;       // 2% ao mês
$per = 12;      // 12 meses

$resultado = calcularJurosCompostos($cap, $tax, $per);
$lucro = $resultado - $cap;

echo "### Simulação de Investimento ###\n";
echo "Capital Inicial: R$ " . number_format($cap, 2, ',', '.') . "\n";
echo "Taxa: $tax% ao período\n";
echo "Tempo: $per períodos\n";
echo str_repeat("-", 30) . "\n";
echo "Montante Final: R$ " . number_format($resultado, 2, ',', '.') . "\n";
echo "Total de Juros: R$ " . number_format($lucro, 2, ',', '.') . "\n";

?>