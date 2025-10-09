<?php
/*
1- Escreva um script que leia o nome de uma peça de roupa e o tamanho (P, M ou G). 
Use switch para definir o preço base e if para aplicar um acréscimo de 10% se for tamanho G. 
Mostre o preço final concatenando uma frase descritiva.
*/

$nomePeca = "Camiseta";
$tamanho = "M"; // Pode ser P, M ou G
$precoBase = 0;

switch ($tamanho) {
    case "P":
        $precoBase = 30;
        break;
    case "M":
        $precoBase = 35;
        break;
    case "G":
        $precoBase = 40;
        break;
    default:
        echo "Tamanho inválido!";
        exit;
}

if ($tamanho == "G") {
    $precoBase += $precoBase * 0.10; // acréscimo de 10%
}

echo "A peça '$nomePeca' tamanho $tamanho custa R$ " . number_format($precoBase, 2, ',', '.') . "<br>";
?>

