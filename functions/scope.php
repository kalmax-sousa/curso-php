<div class="title">Escopo</div>

<?php
function imprimirMensagens(){
    echo "Olá!";
    echo " Até a próxima<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel = 1;

function  trocaValor(){
    $variavel = 2;
    echo "Durante a função $variavel <br>";
}

