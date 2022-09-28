<div class="title">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;
echo "<br>";

if($pi == pi()){
    echo "Iguais<br>";
} else {
    echo "Diferentes<br>";
}

$piErrado = 2.8;

echo '<br' . ($pi - pi());
echo '<br' . ($piErrado - pi());

if(($pi - pi()) <= 0.01)
    echo "Praticamente iguais<br>";

if($piErrado == pi()){
    echo "Praticamente iguais<br>";
} else {
    echo "Valor errado<br>";
}
