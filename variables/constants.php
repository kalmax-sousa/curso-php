<div class="title">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
ECHO TAXA_DE_JUROS;
//ECHO $TAXA_DE_JUROS (não funciona)
//TAXA_DE_JUROS = 2.5 (não é permitido)

const NOVA_TAXA = 2.5;
ECHO "<br>" . NOVA_TAXA;

$valorVariavel = 2.8;
// define('NOVISSIMA_TAXA', $valorVariavel); #permitido
// const NOVISSIMA_TAXA = $valorVariavel;   #não permitido
const NOVISSIMA_TAXA = 2.8 + 1.2;
ECHO "<br>" . NOVISSIMA_TAXA;

ECHO "<br>" . PHP_VERSION;
ECHO "<br>" . PHP_INT_MAX;

ECHO "<br>Linha: " . __LINE__;
ECHO "<br>" . __FILE__;
ECHO "<br>" . __DIR__;
