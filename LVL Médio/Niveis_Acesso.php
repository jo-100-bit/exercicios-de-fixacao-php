<?php
$perfil = "admin"; // Pode ser: admin, user ou visitante

if ($perfil == "admin") {
    echo "Acesso total: Painel de Controle liberado.";
} elseif ($perfil == "user") {
    echo "Acesso restrito: Você pode ver seus dados.";
} elseif ($perfil == "visitante") {
    echo "Acesso limitado: Apenas leitura de conteúdo.";
} else {
    echo "Erro: Perfil não identificado.";
}
?>