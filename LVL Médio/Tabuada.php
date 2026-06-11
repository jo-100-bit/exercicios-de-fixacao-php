<?php
function gerarTabuada($n) {
    for ($i = 1; $i <= 10; $i++) {
    echo "$n x $i = " . ($n * $i) . "<br>";

    }

}
gerarTabuada(7);