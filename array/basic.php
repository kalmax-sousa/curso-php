<div class="title">Array</div>

<?php
$list = array(1, 2, 3.4, "text");

echo $list . '<br>';
var_dump($list);
echo '<br>';
print_r($list);

$lista[0] = 1234;

echo '<br>' . $list[0];
echo '<br>' . $list[1];
echo '<br>' . $list[2];
echo '<br>' . $list[3];

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[10];
echo '<br>' . $texto[6];
echo '<br>' . mb_substr($texto, 10, 1);