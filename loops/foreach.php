<div class="title">ForEach</div>

<?php
$array = [1000 => "Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

foreach ($array as $value){
    echo "$value <br>";
}

foreach ($array as $indice => $value){
    echo "$indice => $value<br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha){
    foreach ($linha as $value){
        echo "$value ";
    }

    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}

print_r($numeros);