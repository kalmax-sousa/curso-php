<div class="title">Desafio Data</div>

<?php
class Date{
    public $day = 1;
    public $month = 1;
    public $year = 1970;

    public function toString(){
        return "{$this->day}/{$this->month}/{$this->year}";
    }
}

$d1 = new Date();
echo $d1->toString() . '<br>';

$d1->day = 10;
$d1->year = 2022;

echo $d1->toString() . '<br>';
