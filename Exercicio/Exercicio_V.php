#5 - Monte um carrinho de compras com produtos e preços, use array, calcule total e mostre um recibo formatado.
<?php
$carrinho = [
    ["produto" => "Arroz", "preco" => 20.50],
    ["produto" => "Feijão", "preco" => 10.00],
    ["produto" => "Macarrão", "preco" => 7.30],
    ["produto" => "Leite", "preco" => 5.20]
];

$total = 0;

echo "=== RECIBO DE COMPRA ===\n";
foreach ($carrinho as $item) {
    echo "{$item['produto']} ........ R$ " . number_format($item['preco'], 2, ',', '.') . "\n";
    $total += $item['preco'];
}
echo "=========================\n";
echo "TOTAL: R$ " . number_format($total, 2, ',', '.') . "\n";
?>
