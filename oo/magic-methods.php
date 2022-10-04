<div class="title">Métodos Mágicos</div>

<?php
class Pessoa{
    public $nome;
    public $idade;
    function __construct($nome, $idade){
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "E morreu!<br>";
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar(){
        echo $this . "<br>";
    }

    public function __get($atrib){
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $value){
        echo "Alterando atributo não declarado: {$atrib}/{$value}<br>";
    }

    public function __call($metodo, $params){
        echo "Tentando executar método {$metodo}, com os parâmetros:<br>";
        print_r($params);
        echo '<br>';
    }
}

$pessoa = new Pessoa('Ricardo', 40);
$pessoa->apresentar();
echo $pessoa, '<br>';
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar();

echo '<br>';
$pessoa->nomeCompleto;
$pessoa->nomeCompleto = "Muito LEGAL";

echo '<br>';
$pessoa->exec();
$pessoa->exec(1, 'teste', true, [1, 2, 3]);

$pessoa = null;