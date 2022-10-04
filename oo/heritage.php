<div class="title">Herança</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa Criada<br>";
    }

    function __destruct(){
        echo "tchau!";
    }

    public function toString(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login)
    {
        $this->login = $login;
        echo "Usuário criado!<br>";
        parent::__construct($nome, $idade);
    }

    function __destruct()
    {
        echo "Usuário diz: Tchau!<br>";
        parent::__destruct();
    }

    public function toString()
    {
        echo "@{$this->login}: ";
        parent::toString();

    }
}

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->toString();

$usuario = null;