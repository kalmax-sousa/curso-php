<div class="title">Operadores Relacionais</div>

<?php
var_dump( 1 == 1);
echo "<br>";
var_dump( 1 > 1);
echo "<br>";
var_dump( 1 >= 1);
echo "<br>";
var_dump( 1 < 1);
echo "<br>";
var_dump( 1 <= 1);
echo "<br>";
var_dump( 1 != 1);
echo "<br>";
var_dump( 1 <> 1);
echo "<br>";


var_dump( 111 == '111');
echo "<br>";
var_dump( 111 === '111');
echo "<br>";
var_dump( 111 != '111');
echo "<br>";
var_dump( 111 !== '111');
echo "<br>";

echo"'<p class='division'>Relacionais no If/ELse</p> <hr>";
$idade = 15;

if($idade < 18)
    echo "Menor de idade = $idade anos<br>";
else if($idade <= 65)
    echo "Adulto = $idade anos<br>";
else
    echo "Terceira idade = $idade anos<br>";


echo "<p class='division'>Spaceship</p> <hr>";
var_dump(5 <=> 3); // 1
var_dump(50 <=> 50); // 0
var_dump(5 <=> 50); // -1
