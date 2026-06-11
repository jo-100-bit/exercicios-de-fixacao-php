<?php
$nomes = ['Mario', 'Lucas', 'Ana', 'Beatriz'];
$total = count($nomes);

// Começa no último índice (total - 1) e vai até 0
for ($i = $total - 1; $i >= 0; $i--) {
    echo $nomes[$i] . PHP_EOL;
}
?>