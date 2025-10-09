<?php
/*
2 - Crie um array de notas de alunos (ex.: 4 notas). Calcule a média de cada um usando foreach. 
Mostre se foi aprovado (>= 6) ou reprovado usando if/else.
*/

$alunos = [
    ["nome" => "Ana", "notas" => [7, 8, 6, 9]],
    ["nome" => "Bruno", "notas" => [5, 4, 6, 5]],
    ["nome" => "Carla", "notas" => [9, 8, 10, 9]]
];

foreach ($alunos as $aluno) {
    $soma = array_sum($aluno["notas"]);
    $media = $soma / count($aluno["notas"]);

    if ($media >= 6) {
        echo "{$aluno['nome']} foi aprovado com média " . number_format($media, 2, ',', '.') . "<br>";
    } else {
        echo "{$aluno['nome']} foi reprovado com média " . number_format($media, 2, ',', '.') . "<br>";
    }
}
?>
