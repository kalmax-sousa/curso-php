<div class="title">Desafio Impressão</div>

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i < count($array); $i++){
    if($i % 2 === 1) continue;
    echo "$array[$i] ";
}

echo "<br>";

foreach ($array as $indice => $value){
    if($indice % 2 === 1) continue;
    echo "$value ";
}