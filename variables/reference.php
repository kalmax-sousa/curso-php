<div class="title">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

//Atribuição por Valor
$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavelValor = "novo valor";
echo "<br> $variavelValor";

//Atribuição por referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';
echo "<br>$variavel $variavelReferencia";