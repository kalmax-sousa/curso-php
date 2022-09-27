<div class="title">Desafio Equação</div>

<?php
$numA = (6 * (3+2))**2;
$denA = 3 * 2;
$numB = (1 - 5) * (2 - 7);
$denB = 2;

$num1 = $numA/$denA;
$num2 = ($numB/$denB) ** 2;


$numG = ($num1 - $num2) ** 3;
$denG = 10 ** 3;
$result = $numG/$denG;
ECHO "O resultado final é: " . $result . ".";