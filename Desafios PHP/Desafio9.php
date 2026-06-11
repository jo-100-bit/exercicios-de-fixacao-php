<?php
// 1. Inicia a sessão (obrigatório antes de qualquer saída de texto)
session_start();

// 2. Armazena o nome do usuário na sessão
$_SESSION['username'] = "João"; // Você pode substituir pelo nome vindo de um formulário

// 3. Verifica se a chave existe e exibe a mensagem de boas-vindas
if (isset($_SESSION['username'])) {
    echo "<h1>Bem-vindo, " . htmlspecialchars($_SESSION['username']) . "!</h1>";
    echo "<p>Sua sessão foi iniciada e seu nome foi armazenado com sucesso.</p>";
}
?>