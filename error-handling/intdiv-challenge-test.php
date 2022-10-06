<div class="title">Desafio intdiv</div>

<?php
include_once 'intdiv-challenge.php';
use function \aritmetica\intdiv;

try{
    echo intdiv(8, 3) . "<br.";
} catch(\aritmetica\NaoInteiroException $e){
    echo 'Resultado não é um número inteiro <br>';
} catch(DivisionByZeroError $e){
    echo 'Divisão por zero<br>';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';
echo \intdiv(8, 3) . '<br>';
