<div class="title">Closure e Callable</div>

<?php
$soma1 = function($a, $b){
    return $a + $b;
};

$soma2 = function($a, $b){
    return $a + $b;
};

echo $soma1(1, 3) . ' ';
echo is_callable($soma1) ? 'Sim' : 'Não' . '<br>';

echo $soma2(1, 3) . ' ';
echo is_callable($soma2) ? 'Sim' : 'Não' . '<br>';

var_dump($soma1);


function executar1($a, $b, $op, Callable $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}
echo '<br>';
executar1(2, 3, '+', $soma1);
executar1(2, 3, '+', soma2);


function executar2($a, $b, $op, Closure $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}
echo '<br>';
executar2(100, 100, '+', $soma1);
executar2(3000, 3000, '+', soma2);
