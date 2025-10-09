<?php
/*
5 - Monte um carrinho de compras com produtos e preços, use array, calcule total e mostre um recibo formatado.
*/

$carrinho = [
    ["produto" => "Arroz", "preco" => 20.50],
    ["produto" => "Feijão", "preco" => 10.00],
    ["produto" => "Oleo", "preco" => 7.30],
    ["produto" => "Pao", "preco" => 5.20]
];

$total = 0;

echo "=== RECIBO DE COMPRA ===<br>";
foreach ($carrinho as $item) {
    echo "{$item['produto']} ........ R$ " . number_format($item['preco'], 2, ',', '.') . "<br>";
    $total += $item['preco'];
}
echo "=========================<br>";
echo "TOTAL: R$ " . number_format($total, 2, ',', '.') . "<br>";
?>
