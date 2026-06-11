<?php
/**
 * Aplica um desconto de 10% sobre um valor informado
 * @param float $valor
 * @return float
 */
function aplicarDesconto($valor) {
    // Cálculo: Valor original - (Valor * 0.10)
    // Ou simplesmente: $valor * 0.9
    return $valor * 0.9;
}

// Exemplo de uso:
$precoOriginal = 150.00;
$precoFinal = aplicarDesconto($precoOriginal);

echo "Preço original: R$ " . number_format($precoOriginal, 2, ',', '.') . "\n";
echo "Preço com 10% de desconto: R$ " . number_format($precoFinal, 2, ',', '.');

// Saída: 
// Preço original: R$ 150,00
// Preço com 10% de desconto: R$ 135,00
?>