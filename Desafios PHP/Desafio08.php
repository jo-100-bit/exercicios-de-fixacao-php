<?php
$nome_cookie = "tema";

// 1. Lógica para definir o tema (Simulação de escolha do usuário via link/URL)
if (isset($_GET['set'])) {
    $tema_escolhido = $_GET['set']; // 'claro' ou 'escuro'
    
    // Define o cookie por 7 dias (7 dias * 24 horas * 60 min * 60 seg)
    setcookie($nome_cookie, $tema_escolhido, time() + (7 * 24 * 60 * 60));
    
    // Redireciona para limpar a URL e aplicar o cookie
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Preferência de Tema</title>
</head>
<body>

    <?php
    // 2. Verifica se o cookie existe
    if (isset($_COOKIE[$nome_cookie])) {
        $tema = $_COOKIE[$nome_cookie];
        echo "<h2>Configuração Atual</h2>";
        echo "O seu tema preferido é: <strong>" . htmlspecialchars($tema) . "</strong>";
        echo "<p>Esta preferência será lembrada pelos próximos 7 dias.</p>";
    } else {
        // 3. Se não existir, solicita a definição
        echo "<h2>Bem-vindo!</h2>";
        echo "<p>Você ainda não definiu um tema. Por favor, escolha uma opção abaixo:</p>";
    }
    ?>

    <hr>
    <h3>Escolher Tema:</h3>
    <a href="?set=claro">Definir Tema Claro</a> | 
    <a href="?set=escuro">Definir Tema Escuro</a>

</body>
</html>