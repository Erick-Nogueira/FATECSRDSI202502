<?php
/*
6 - De um array de salários, dê um aumento de 10% a quem ganha abaixo de 2000.
*/
$salarios = [1500, 1800, 2200, 2500, 1900,5000];
$novosSalarios = [];

foreach ($salarios as $salario) {
    if ($salario < 2000) {
        $novosSalarios[] = $salario * 1.1;
    } else {
        $novosSalarios[] = $salario;
    }
}

echo "Salários antigos: " . implode(", ", $salarios) . "<br>";
echo "Salários atualizados: " . implode(", ", array_map(fn($s) => number_format($s, 2, ',', '.'), $novosSalarios)) . "\n";
?>


