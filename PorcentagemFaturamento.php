<?php
//array com os estados e seus faturamentos respectivos
$faturamento = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "outros" => 19849.53
];

$valor = $faturamento["outros"];//escolha do estado feita por aqui
$resultado = ($valor / array_sum($faturamento)) * 100;
/*porcentagem obtida atravez do valor de faturamento do estado escolhido,
 dividido pela soma de todos os estados, multiplicado por 100
*/
 echo "percentual do dentro do valor total é: " . number_format($resultado, 2) . "%"
//porcentagem formatada com 2 numeros de decimal arredondando para cima, para que não fique um numero extenso demais.





?>