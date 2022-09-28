<div class="title">Arrays Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];
//FRUTAS = 'Test';
//FRUTAS[0] = 'banana';
//FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
//CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array("Belo Horizonte", "Recife"));
//CIDADES[] = "Rio de Janeiro";
echo '<br>' . CARROS[1];
