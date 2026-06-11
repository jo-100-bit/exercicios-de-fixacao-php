<?php
$valores = [100, 250, 150, 90, 310, 50];

// Iniciamos assumindo que o primeiro elemento é o maior
$maior = $valores[0];

foreach ($valores as $numero) {
    // Se o número atual for maior que o que temos guardado...
    if ($numero > $maior) {
        // ...ele passa a ser o novo maior
        $maior = $numero;
    }
}

echo "O maior valor encontrado manualmente é: " . $maior;
// Saída: 310
?>