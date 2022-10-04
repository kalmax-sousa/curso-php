<div class="title">Interface</div>

<?php
interface Animal{
    function respirar();
}

interface Mamifero{
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
    function correr();
}

interface Felino extends Animal, Mamifero {
    function correr(): string;
}

class Cachorro implements Canino{
    public function respirar()
    {
        return "Iriei usar oxigênio";
    }

    public function mamar()
    {
        return "Irei usar leite";
    }

    public function latir(): string
    {
        return 'au au';
    }

    public function correr()
    {
        return "vruuun";
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar() . '<br>';
echo $animal1->mamar() . '<br>';
echo $animal1->latir() . '<br>';
echo $animal1->correr() . '<br>';

echo '<br>';
var_dump($animal1);

echo '<br>';
var_dump($animal1 instanceof Cachorro);

echo '<br>';
var_dump($animal1 instanceof Canino);

echo '<br>';
var_dump($animal1 instanceof Mamifero);

echo '<br>';
var_dump($animal1 instanceof Animal);

echo '<br>';
var_dump($animal1 instanceof Felino);