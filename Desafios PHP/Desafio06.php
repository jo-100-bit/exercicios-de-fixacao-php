<?php
$nome_cookie = "idioma";
$valor_idioma = "pt"; // Pode ser "pt" ou "en"

// 1. Cria o cookie (expira em 0 significa: quando o navegador fechar)
setcookie($nome_cookie, $valor_idioma, 0);

// Forçamos a atualização da superglobal para fins de exibição imediata neste script
$_COOKIE[$nome_cookie] = $valor_idioma;

echo "<h2>Gerenciamento de Idioma</h2>";

// 2. Exibe o idioma escolhido
if (isset($_COOKIE[$nome_cookie])) {
    $preferencia = ($_COOKIE[$nome_cookie] == "pt") ? "Português" : "Inglês";
    echo "Idioma detectado no cookie: <strong>" . $preferencia . "</strong><br>";
}

// 3. Apaga o cookie
// Para apagar, definimos uma data de expiração no passado (time() - 3600)
setcookie($nome_cookie, "", time() - 3600);

// 4. Mensagem de confirmação
echo "Mensagem: O cookie '$nome_cookie' foi removido com sucesso.";
?>