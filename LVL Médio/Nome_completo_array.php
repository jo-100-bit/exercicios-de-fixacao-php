<?php
$nomes = ["Gabriel", "Ana", "Lucas"];
$sobrenomes = ["Silva", "Oliveira", "Santos"];
$nomesCompletos = [];

for ($i = 0; $i < count($nomes); $i++) {
    $nomesCompletos[] = $nomes[$i] . " " . $sobrenomes[$i];
}

print_r($nomesCompletos);
/* Saída:
Array (
    [0] => Gabriel Silva
    [1] => Ana Oliveira
    [2] => Lucas Santos
)
*/
?>

<?php
$nomes = ["Gabriel", "Ana", "Lucas"];
$sobrenomes = ["Silva", "Oliveira", "Santos"];

$nomesCompletos = array_map(function($n, $s) {
    return "$n $s";
}, $nomes, $sobrenomes);

print_r($nomesCompletos);
?>