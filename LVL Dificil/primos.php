<?php

/**
 * Verifica se um número é primo.
 */
function ehPrimo($n) {
    // 1. Números menores ou iguais a 1 não são primos
    if ($n <= 1) {
        return false;
    }

    // 2. Otimização: O único par primo é o 2
    if ($n == 2) {
        return true;
    }
    if ($n % 2 == 0) {
        return false;
    }

    // 3. Verificamos divisores ímpares até a raiz quadrada de $n
    // Isso economiza muito processamento em números grandes
    $limite = sqrt($n);
    for ($i = 3; $i <= $limite; $i += 2) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

// --- Testando a função ---
$numero = 29;

if (ehPrimo($numero)) {
    echo "O número $numero é primo.";
} else {
    echo "O número $numero não é primo.";
}

?>