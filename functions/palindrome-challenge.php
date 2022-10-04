<div class="title">Desafio Palíndromo</div>

<?php
function isPalindrome($name){
    $name = strtolower($name);
    for($i = 0, $j = strlen($name) - 1; $j > $i; $i++, $j--){
        if($name[$i] !== $name[$j])
            return 'Não';
    }

    return 'Sim';
}

echo isPalindrome("Arara") . '<br>';
echo isPalindrome("ana") . '<br>';
echo isPalindrome("abccba") . '<br>';
echo isPalindrome("bola") . '<br>';


function palindromoSimples($palavra){
    $palavra = strtolower($palavra);
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSimples("Arara") . '<br>';
echo palindromoSimples("ana") . '<br>';
echo palindromoSimples("abccba") . '<br>';
echo palindromoSimples("bola") . '<br>';
