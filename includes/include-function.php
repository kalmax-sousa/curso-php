<div class="title">Include Função</div>

<?php
echo "Carregando: includefunction<br>";

function carregarArquivo(){
    include('include-file.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_function<br>';
//echo soma(1, 8) . '<br>';
carregarArquivo();

echo "Variavel = '{$variavel}'";
var_dump($variavel);
echo '<br>';

echo soma(3, 8) . '<br>';

