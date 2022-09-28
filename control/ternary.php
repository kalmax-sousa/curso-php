<div class="title">Operador Ternário</div>

<?php
$idade = 70;
$status;

if($idade >= 18){
    $status = "Maior de idade";
} else{
    $status = "Menor de idade";
}

echo "$status<br>";

$idade = 17;
$status = $idade >=18 ? 'Maior de idade' : 'Menor de idade';
echo "$status<br>";

$idade = 98;
$tipoMaiorIdade = $idade >= 65 ? "Aposentado" : "Maior de Idade";
$status = $idade >= 18 ? $tipoMaiorIdade : "Menor de Idade";
echo "$status<br>";
