<?php
// 1. Inicia a sessão para permitir o acesso aos dados
session_start();

// 2. Verifica se a chave 'loggedIn' existe na sessão
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    echo "<h2>Status: Você está logado.</h2>";
    echo "<p>Bem-vindo ao painel administrativo!</p>";
} else {
    echo "<h2>Status: Você não está logado.</h2>";
    echo "<p>Por favor, faça o login para acessar esta área.</p>";
}

// --- Exemplo de teste (opcional) ---
// Para testar o estado de "logado", você poderia descomentar a linha abaixo:
// $_SESSION['loggedIn'] = true;
?>