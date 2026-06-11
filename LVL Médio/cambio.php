<?php
/**
 * Converte o valor de Reais para Dólares
 * @param float $valorReais
 * @param float $taxa (Padrão 5.0)
 * @return float
 */
function converterParaDolar($valorReais, $taxa = 5.0) {
    return $valorReais / $taxa;
}

// Exemplo de uso:
$reais = 100;
$dolares = converterParaDolar($reais);

echo "R$ " . number_format($reais, 2, ',', '.') . " equivalem a US$ " . number_format($dolares, 2, '.', ',');
// Saída: R$ 100,00 equivalem a US$ 20.00
?>