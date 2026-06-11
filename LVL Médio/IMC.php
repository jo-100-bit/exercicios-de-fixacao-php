<?php
/**
 * Calcula o IMC e retorna a classificação
 * @param float $peso
 * @param float $altura
 * @return string
 */
function calcularClassificacaoIMC($peso, $altura) {
    // Cálculo do IMC
    $imc = $peso / ($altura * $altura);
    
    // Classificação
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        return "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 34.9) {
        return "Obesidade Grau I";
    } elseif ($imc >= 35 && $imc < 39.9) {
        return "Obesidade Grau II";
    } else {
        return "Obesidade Grau III";
    }
}

// Exemplo de uso:
$p = 75.5;
$a = 1.75;
echo "Classificação: " . calcularClassificacaoIMC($p, $a);
?>