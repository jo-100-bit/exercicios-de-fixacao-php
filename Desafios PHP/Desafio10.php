<?php
$nome_cookie = "usuario";

// 1. Lógica para definir o cookie caso o nome seja enviado via URL
if (isset($_GET['nome'])) {
    $valor_nome = $_GET['nome'];
    
    // Define o cookie por 24 horas (24 horas * 60 min * 60 seg = 86400 segundos)
    setcookie($nome_cookie, $valor_nome, time() + 86400);
    
    // Redireciona para atualizar a página e o PHP reconhecer o cookie recém-criado
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Usuário</title>
</head>
<body>

    <?php
    // 2. Verifica se o cookie existe
    if (isset($_COOKIE[$nome_cookie])) {
        $usuario = $_COOKIE[$nome_cookie];
        echo "<h1>Bem-vindo, " . htmlspecialchars($usuario) . "!</h1>";
        echo "<p>Seu nome está guardado neste navegador e será lembrado pelas próximas 24 horas.</p>";
    } else {
        // 3. Caso o cookie não exista
        echo "<h1>Olá!</h1>";
        echo "<p>O cookie de usuário não foi encontrado.</p>";
        echo "<p>Para definir o cookie, clique no link abaixo ou adicione <strong>?nome=SeuNome</strong> ao final da URL.</p>";
        echo '<a href="?nome=Visitante">Definir cookie como "Visitante"</a>';
    }
    ?>

</body>
</html>