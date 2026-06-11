<?php
/**
 * Valida se a string é inválida (vazia ou muito curta)
 * @param string $texto
 * @return bool
 */
function stringInvalida($texto) {
    // Verifica se está vazia OU se o comprimento é menor que 5
    if (empty($texto) || strlen($texto) < 5) {
        return true; // É inválida
    }
    
    return false; // É válida
}

// Exemplos de teste:
var_dump(stringInvalida(""));      // true (vazia)
var_dump(stringInvalida("Oi"));    // true (menor que 5)
var_dump(stringInvalida("PHP8"));  // true (menor que 5)
var_dump(stringInvalida("Gabriel")); // false (válida)
?>