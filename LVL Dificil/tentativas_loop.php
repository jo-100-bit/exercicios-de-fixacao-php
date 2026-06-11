<?php
$senhaMestra = "seg123";
$tentativas =["erro1", "erro2", "seg123"];
$acesso=false;

foreach ($tentativas as $index => $senha){
    if ($senha === $senhaMestra) {
        echo "Acesso concedido na tentativa " . ($index + 1);
        $acesso = true;
        break;
    }
}
if (!$acesso) echo "Conta bloqueada após 3 tentativas. ";
?>