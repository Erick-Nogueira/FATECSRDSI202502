<?php
/*
3 - Some todos os números pares entre 1 e 50 com while e armazene os pares em um array. 
Mostre a soma final e a lista de pares.
*/

$numero = 1;
$pares = [];
$soma = 0;

while ($numero <= 50) {
    if ($numero % 2 == 0) {
        $pares[] = $numero;
        $soma += $numero;
    }
    $numero++;
}

echo "Números pares: " . implode(", ", $pares) . "<br>" ;

echo "Soma total dos pares: $soma <br>";
?>
