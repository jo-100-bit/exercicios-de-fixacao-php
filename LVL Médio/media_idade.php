<?php
// Array associativo: Nome => Idade
$pessoas = [
    "Arthur" => 20,
    "Beatriz" => 22,
    "Carlos" => 19,
    "Daniela" => 21
];

$somaIdades = 0;
$totalPessoas = count($pessoas);

foreach ($pessoas as $nome => $idade) {
    $somaIdades += $idade;
}

$media = $somaIdades / $totalPessoas;

echo "A média de idade das $totalPessoas pessoas é: " . $media . " anos.";
?>