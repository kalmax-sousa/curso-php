<div class="title">Variávies</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';

$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;
echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = "Agora sou uma string";
echo '<br>', $variavel;

//Nomes de variável
$var = 'válida';
$var2 = 'válida';
$VAR3 = 'válida';
$_VAR4_ = 'válida';
// $5VAR = 'inválida';
// $%VAR6 = 'inválida';
// $VAR7% = 'inválida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);