<?php
/**
 * Função para limpar espaços extras de uma string
 */
function limparTexto($texto) {
    // A função trim() remove espaços do início e do fim
    return trim($texto);
}

// Exemplo de uso:
$entradaSuja = "   Olá, Mundo!   ";
$entradaLimpa = limparTexto($entradaSuja);

echo "Original: [" . $entradaSuja . "]\n";
echo "Limpo: [" . $entradaLimpa . "]";
?>