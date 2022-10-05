<div class="title">Include com Retorno</div>

<?php
$valorRetorno = require('return.php');
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

echo __DIR__ . '<br>';

$valorRetorno2 = require(__DIR__ . '/unused-return.php');
//var_dump($valorRetorno2);
echo "$valorRetorno2<br>";
echo "$variavelDeclarada<br>";