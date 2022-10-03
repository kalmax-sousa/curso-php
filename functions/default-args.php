<div class="title">Argumentos Padrões</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem Vindo(a), {$nome} {$sobrenome}!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null, null);
echo saudacao("Mestre", "Supremo");

function anotarPedido($comida, $bebida = 'água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido("Hambúrguer");
anotarPedido("Pizza", "Refrigerante");

function anotarPedido2($bebida = 'água', $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}
//anotarPedido2("Hambúrguer");
anotarPedido2("Refrigerante2", "Pizza2");
