 <?php
// Nome do cookie: "user"
// Valor: "Gabriel" (ou qualquer nome de sua preferência)
// Expira em: time() + 3600 (daqui a 1 hora)
// O "/" indica que o cookie está disponível em todo o site

setcookie("user", "Gabriel", time() + 3600, "/");

echo "Cookie 'user' foi definido com sucesso!";
?>


<?php
// Verifica se o cookie existe para evitar erros de "Undefined index"
if (isset($_COOKIE['user'])) {
    echo "<br> O usuário logado é: " . $_COOKIE['user'];
} else {
    echo "Nenhum cookie de usuário encontrado.";
}
?>