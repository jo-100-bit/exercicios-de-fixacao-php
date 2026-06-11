<?php
$nome_cookie = "contador";

// 1. Verifica se o cookie já existe
if (isset($_COOKIE[$nome_cookie])) {
    // Se existe, incrementa o valor atual
    $valor_atualizado = $_COOKIE[$nome_cookie] + 1;
} else {
    // Se não existe (ou expirou), inicia a contagem em 1
    $valor_atualizado = 1;
}

// 2. Define/Atualiza o cookie
// time() + 3600 segundos equivale a exatamente 1 hora
setcookie($nome_cookie, $valor_atualizado, time() + 3600);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Contador de Acessos</h1>
    
    <p>
        <?php 
        if ($valor_atualizado == 1) {
            echo "Esta é a sua primeira visita nesta hora!";
        } else {
            echo "Você já visitou esta página <strong>$valor_atualizado</strong> vezes na última hora.";
        }
        ?>
    </p>

    <p><small>O contador será reiniciado se você ficar mais de 1 hora sem acessar.</small></p>
    
    <button onclick="window.location.reload();">Atualizar Página</button>
</body>
</html>