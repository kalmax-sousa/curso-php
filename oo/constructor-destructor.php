<div class="title">Construtor e Destrutor</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo 'Construtor invocado <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "E morreu!<br>";
    }

    public function toString(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoaA = new Pessoa('Rebeca Maria', 40);
$pessoaA->toString();
unset($pessoaA);

$pessoaB = new Pessoa('João Pedro', 13);
$pessoaB->toString();
$pessoaB = null;
