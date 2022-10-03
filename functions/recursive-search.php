<div class="title">Busca Recursiva</div>

<?php
$array = [1, 2, [3, 4, 5], 6 , [7, [8, 9]]];

function imprimirArray($array, $nivel = '>'){
    foreach ($array as $e){
        if(is_array($e)){
            imprimirArray($e, $nivel . $nivel[0]);
        } else {
            echo "$nivel $e<br>";
        }
    }
}

imprimirArray($array);
imprimirArray($array, '#');