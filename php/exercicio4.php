<?php
$soma = 0;
while ($soma < 100) {
    echo "Digite um valor: \n";
    $valor = readline();
    $soma += $valor;
}

echo "Soma dos valores entrados pelo usuario: $soma\n";     
