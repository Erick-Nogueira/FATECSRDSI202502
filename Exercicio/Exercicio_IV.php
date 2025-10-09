<?php
/*
4 - Faça um simulador de caixa eletrônico: escolha a opção de saque (20, 50, 100) 
com switch e while para contar notas.
*/

$valorSaque = 130; // Você pode trocar para testar outros valores
$valorRestante = $valorSaque;

$notas = [100, 50, 20]; // Notas disponíveis
$quantidadeNotas = [];

// Contador de notas com switch e while
foreach ($notas as $nota) {
    $quantidade = 0;

    // Usamos switch para decidir o comportamento da nota
    switch ($nota) {
        case 100:
        case 50:
        case 20:
            while ($valorRestante >= $nota) {
                $valorRestante -= $nota;
                $quantidade++;
            }

            if ($quantidade > 0) {
                $quantidadeNotas[$nota] = $quantidade;
            }
            break;

        default:
            // Ignora notas não disponíveis
            break;
    }
}

// Verifica se o valor foi sacado por completo
if ($valorRestante > 0) {
    echo "Erro: Não é possível sacar R$ $valorSaque com as notas disponíveis (100, 50 e 20).<br>";
} else {
    echo "<h3>Saque de R$ $valorSaque realizado com:</h3>";
    foreach ($quantidadeNotas as $nota => $qtd) {
        echo "$qtd nota(s) de R$ $nota<br>";
    }
}
?>
