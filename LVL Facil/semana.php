<?php
$dia = 2; // Altere para 1, 2 ou 3

switch ($dia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    default:
        echo "Valor inválido! Escolha entre 1, 2 ou 3.";
        break;
}
?>