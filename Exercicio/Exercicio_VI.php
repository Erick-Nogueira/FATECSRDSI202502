#6 - De um array de salários, dê um aumento de 10% a quem ganha abaixo de 2000.
<?php
$salarios = [1500, 1800, 2200, 2500, 1900];
$novosSalarios = [];

foreach ($salarios as $salario) {
    if ($salario < 2000) {
        $novosSalarios[] = $salario * 1.1;
    } else {
        $novosSalarios[] = $salario;
    }
}

echo "Salários antigos: " . implode(", ", $salarios) . "\n";
echo "Salários atualizados: " . implode(", ", array_map(fn($s) => number_format($s, 2, ',', '.'), $novosSalarios)) . "\n";
?>


#1- Escreva um script que leia o nome de uma peça de roupa e o tamanho (P, M ou G). Use switch para definir o preço base e if para aplicar um acréscimo de 10% se for tamanho G. Mostre o preço final concatenando uma frase descritiva.
#2 - Crie um array de notas de alunos (ex.: 4 notas). Calcule a média de cada um usando foreach. Mostre se foi aprovado (>= 6) ou reprovado usando if/else.
#3 - Some todos os números pares entre 1 e 50 com while e armazene os pares em um array. Mostre a soma final e a lista de pares.
#4 - Faça um simulador de caixa eletrônico: escolha a opção de saque (20, 50, 100) com switch e while para contar notas.
#5 - Monte um carrinho de compras com produtos e preços, use array, calcule total e mostre um recibo formatado.