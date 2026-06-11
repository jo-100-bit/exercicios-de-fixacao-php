<?php
// 1. Inicia a sessão
session_start();

// 2. Cria o array de produtos e armazena na sessão
$_SESSION['produtos'] = ['Notebook', 'Smartphone', 'Teclado Mecânico'];

// 3. Exibe os produtos armazenados
echo "<h2>Lista de Produtos na Sessão:</h2>";

if (isset($_SESSION['produtos']) && is_array($_SESSION['produtos'])) {
    echo "<ul>";
    foreach ($_SESSION['produtos'] as $produto) {
        echo "<li>" . htmlspecialchars($produto) . "</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum produto encontrado na sessão.";
}
?>