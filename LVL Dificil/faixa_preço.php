<?php
$produtos = [
    ["nome" => "Mouse", "preco" => 80],
    ["nome" => "Teclado", "preco" => 160],
    ["nome" => "Fone", "preco" => 120],
    ["nome" => "Cabo", "preco" => 30]
];
foreach ($produtos as $p) {
    if ($p["preco"] >= 50 && $p["preco"]<= 150) {
        echo "Produto em destaque: " . $p["nome"] . " - R$ " . $p["preco"] . "<br>";
    }

}