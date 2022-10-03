<div class="title">Desafio Palíndromo</div>

<?php
function isPalindrome($name){
    $name = $name.strtolower();
    for($i = 0, $j = strlen($name); $i > $j; $i++, $j--){
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
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSimples("Arara") . '<br>';
echo palindromoSimples("ana") . '<br>';
echo palindromoSimples("abccba") . '<br>';
echo palindromoSimples("bola") . '<br>';
