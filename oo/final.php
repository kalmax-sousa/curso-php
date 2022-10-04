<div class="title">Modificador Final</div>

<?php
abstract class Abstratas{
    abstract public function metodo1();
    final public function metodo2(){
        echo "Não vou mudar!<br>";
    }
}

class Classe extends Abstratas{
    public function metodo1()
    {
        echo 'Executando Método 1<br>';
    }

    //public function metodo2(){
    //    echo 'Extendendo método 2<br>';
    //}
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica{
    public $att = "Valor único";
}

$unica = new Unica();
echo $unica->att . '<br>';

//class Duplicada extends Unica{
//    public $att2;
//}