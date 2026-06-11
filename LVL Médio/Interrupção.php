<?php
// Loop configurado para ir até 100
for ($i = 1; $i <= 100; $i++) {
    
    // Condição de interrupção
    if ($i == 13) {
        echo "Número 13 encontrado! Interrompendo o loop...";
        break; // Sai do laço imediatamente
    }
    
    echo $i . " ";
}
?>