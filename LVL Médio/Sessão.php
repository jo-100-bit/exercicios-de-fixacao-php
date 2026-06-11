<?php
// 1. Inicia a sessão (deve ser a primeira coisa no script)
session_start();

// 2. Grava o valor no array superglobal $_SESSION
$_SESSION['setor'] = "Desenvolvimento";

// 3. Exibe o valor gravado
if (isset($_SESSION['setor'])) {
    echo "O setor atual da sessão é: " . $_SESSION['setor'];
} else {
    echo "Nenhum setor definido na sessão.";
}
?>