<div class="title">Desafio For</div>

<?php
$impressao = '';
for($i = 0; $i <= 5; $i++){
    $impressao .= '#';
    echo "$impressao <br>";
}

echo  '<hr>';

for($impressao = '#'; $impressao !== '######'; $impressao .= '#'){
    echo $impressao;
}