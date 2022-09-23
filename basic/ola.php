<div class="title">Olá PHP</div>

<h2>Exemplo A</h2>
<?php
    //Ponto e vírgula n é obrigado na última instrução
    echo 'Olá <br/>';
    echo 'Mundo!';
?>

<h2>Exemplo B</h2>
<?= "<br/> Outra forma de 'imprimir'!" ?>

<h2>Exemplo C</h2>
<?php
    //não precisa fechar se o arquivo for somente código PHP ou o bloco de PHP for o último bloco
    phpinfo();
