<?php
// Define o nome do cookie
$nome_cookie = "ultimo_acesso";

// 1. Verifica se o cookie já existe para exibir o valor anterior
if (isset($_COOKIE[$nome_cookie])) {
    $ultimo_acesso = $_COOKIE[$nome_cookie];
    echo "<h2>Bem-vindo de volta!</h2>";
    echo "Seu último acesso foi em: " . $ultimo_acesso;
} else {
    echo "<h2>Bem-vindo!</h2>";
    echo "Esta é a sua primeira visita ou seu cookie expirou.";
}

// 2. Prepara a data e hora atual no formato Brasileiro
$data_atual = date("d/m/Y H:i:s");

// 3. Atualiza (ou cria) o cookie com a data atual
// time() + (30 * 24 * 60 * 60) calcula 30 dias em segundos
setcookie($nome_cookie, $data_atual, time() + (30 * 24 * 60 * 60));

?>