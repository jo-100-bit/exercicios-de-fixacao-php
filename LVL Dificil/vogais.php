<?php
function contarVogais($texto) {
$texto = strtolower($texto);
$vogais = ['a','e', 'i', 'o', 'u' ];
$total = 0;
for ($i = 0; $i < strlen($texto); $i++) {
    if (in_array($texto[$i], $vogais)) $total++;
}
return $total;

}
echo "Total de vogais: " . contarVogais("Sistemas de Ensino Gaucho");
?>