<?php

// Nome do cookie que estamos procurando
$nomeCookie = "aceite";

// 1. Verificamos se o cookie existe usando isset()
if (!isset($_COOKIE[$nomeCookie])) {
    // Se NÃO existir, redirecionamos ou exibimos um aviso
    echo "<h2>Acesso Negado</h2>";
    echo "Você precisa aceitar os Termos de Uso para visualizar este site.<br>";
    echo "<button onclick=\"document.cookie='aceite=true; max-age=86400; path=/'; location.reload();\"> Aceitar Termos </button>";
    
    // Interrompemos a execução do restante da página
    exit;
}

// 2. Se o cookie existe, o código abaixo será executado normalmente
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Área Restrita</title>
</head>
<body>
    <h1>Bem-vindo ao Site!</h1>
    <p>Você já aceitou nossos termos, então o acesso está liberado.</p>
</body>
</html>