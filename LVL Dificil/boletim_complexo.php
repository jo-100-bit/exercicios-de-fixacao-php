<?php
$turma = [
    "João" => [8,7,9],
    "Maria" => [10,9,10],
    "Pedro" => [5,6,4]
];
foreach ($turma as $nome => $notas) {
    $media = array_sum($notas) / count($notas);
    echo "Aluno: $nome | Média: " . number_format($media, 1) . "<br>";
}
?>