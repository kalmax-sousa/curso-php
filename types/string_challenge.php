<div class="title">Desafio String</div>

<?php
// Enunciado:
// Avaliando s métodos da documentação da string, qual o método que a posição do texto 'abc' na string '!AbcaBcabc'

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';
echo strpos(strtolower('!AbcaBcabc'), strtolower('abc')) . '<br>';