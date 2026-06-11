<?php

$numeros = [64, 34, 25, 12, 22, 11, 90];
$n = count($numeros);

echo "Array original: " . implode(", ", $numeros) . "\n";

// Percorre todo o array
for ($i = 0; $i < $n - 1; $i++) {
    
    // A cada iteração, o maior elemento "flutua" para o fim
    for ($j = 0; $j < $n - $i - 1; $j++) {
        
        // Se o elemento atual for maior que o próximo, troca-os
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}

echo "Array ordenado: " . implode(", ", $numeros) . "\n";

?>