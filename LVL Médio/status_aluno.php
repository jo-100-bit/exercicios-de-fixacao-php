<?php
$aluno = ["n1" => 8.5, "n2" => 6.0, "n3" => 7.5];
$media = ($aluno["n1"] + $aluno["n2"] + $aluno["n3"])/3;
echo "Média: " . number_format($media, 1) . " - ";
echo ($media >= 7) ? "Aprovado" : "Reprovado";
?>