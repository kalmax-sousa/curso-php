<div class="title">Modificadores de Visibilidade</div>

<?php
class A{
    public $publico = "Público";
    protected $protegido = "Protegido";
    private $privado = "Privado";

    public function mostrarA(){
        echo "a) Público = {$this->publico}<br>";
        echo "a) Protegido = {$this->protegido}<br>";
        echo "a) Privado = {$this->privado}<br>";

        //$this->naoMostrar();
    }

    protected function vaiPorHeranca(){
        echo "Serei transmitido por herança<br>";
    }

    private function naoMostrar(){
        echo "Não vou imprimir<br>";
    }
}

$a = new A();
echo $a->publico . '<br>';
//echo $a->protegido . '<br>';
//echo $a->privado . '<br>';
$a->mostrarA();
//$a->naoMostrar()

class B extends A{
    public function mostrarB(){
        echo "b) Público = {$this->publico}<br>";
        echo "b) Protegido = {$this->protegido}<br>";
        //echo "b) Privado = {$this->privado}<br>";

        parent::vaiPorHeranca();
    }
}
echo '<br>';
$b = new B();
$b->mostrarA();
$b->mostrarB();
