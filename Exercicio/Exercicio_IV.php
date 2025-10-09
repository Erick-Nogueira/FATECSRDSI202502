#4 - Faça um simulador de caixa eletrônico: escolha a opção de saque (20, 50, 100) com switch e while para contar notas.

<?php
$valor = (int) readline("Digite o valor do saque (20, 50 ou 100): ");
$notas = 0;

switch ($valor) {
    case 20:
        while ($valor > 0) {
            $valor -= 20;
            $notas++;
        }
        echo "Você receberá $notas nota(s) de R$20.\n";
        break;

    case 50:
        while ($valor > 0) {
            $valor -= 50;
            $notas++;
        }
        echo "Você receberá $notas nota(s) de R$50.\n";
        break;

    case 100:
        while ($valor > 0) {
            $valor -= 100;
            $notas++;
        }
        echo "Você receberá $notas nota(s) de R$100.\n";
        break;

    default:
        echo "Valor inválido. Escolha 20, 50 ou 100.\n";
}
?>
