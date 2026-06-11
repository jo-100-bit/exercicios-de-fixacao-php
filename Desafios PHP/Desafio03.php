<?php
// 1. Inicia a sessão
session_start();

// 2. Verifica se o botão de destruir sessão foi clicado
if (isset($_POST['destruir'])) {
    // Limpa todas as variáveis da sessão
    session_unset();
    // Destrói a sessão
    session_destroy();
    $mensagem = "A sessão foi destruída com sucesso!";
} else {
    // 3. Se não clicou no botão, garante que existe um valor armazenado
    $_SESSION['usuario'] = "Fulano de Tal";
    $mensagem = "Sessão ativa. Valor armazenado: " . $_SESSION['usuario'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Sessão</title>
</head>
<body>

    <h2>Status da Sessão</h2>
    <p><strong><?php echo $mensagem; ?></strong></p>

    <?php if (isset($_SESSION['usuario'])): ?>
        <form method="post">
            <button type="submit" name="destruir">Destruir Sessão</button>
        </form>
    <?php else: ?>
        <a href="">Recarregar página para iniciar nova sessão</a>
    <?php endif; ?>

</body>
</html>