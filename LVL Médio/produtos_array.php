<?php
$produtos = [
    ["nome" => "Teclado", "preço" => 120],
    ["nome" => "Mouse", "preço" => 80],
    ["nome" => "Monitor", "preço" => 900]
];
foreach ($produtos as $p) {
    echo "Produtos " . $p["nome"] . "<br>";
}
?>