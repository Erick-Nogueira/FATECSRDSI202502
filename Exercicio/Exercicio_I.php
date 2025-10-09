#1- Escreva um script que leia o nome de uma peça de roupa e o tamanho (P, M ou G). Use switch para definir o preço base e if para aplicar um acréscimo de 10% se for tamanho G. Mostre o preço final concatenando uma frase descritiva.

<?php
$peca = readline("Digite o nome da peça de roupa: ");
$tamanho = strtoupper(readline("Digite o tamanho (P, M ou G): "));

switch (strtolower($peca)) {
    case "camisa":
        $precoBase = 50;
        break;
    case "calça":
        $precoBase = 80;
        break;
    case "jaqueta":
        $precoBase = 120;
        break;
    default:
        $precoBase = 40; // valor padrão
}

if ($tamanho == "G") {
    $precoBase *= 1.1; // acréscimo de 10%
}

echo "A peça \"$peca\" tamanho $tamanho custa R$ " . number_format($precoBase, 2, ',', '.') . ".\n";
?>
