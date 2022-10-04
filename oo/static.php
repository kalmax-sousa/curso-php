<div class="title">Membros da Classe (Static)</div>

<?php
class A{
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA(){
        echo "Não Estático: {$this->naoStatic}<br>";
        //echo "Estático: {$this->static}<br>";
        echo "Estático: " . self::$static . "<br>";
    }

    public static function mostrarStaticA(){
        //echo "Não Estático: {$this->naoStatic}<br>";
        echo "Estático: " . self::$static . "<br>";

    }
}

$objA = new A();
$objA->mostrarA();
$objA->mostrarStaticA(); //Não é a forma mais interessante

echo "<br>" . A::$static . "<br>";
A::mostrarStaticA();

A::$static = 'Valor alterado';
echo "<br>" . A::$static . "<br>";
A::mostrarStaticA();

