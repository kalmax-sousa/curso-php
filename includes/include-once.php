<div class="title">Include Once</div>

<?php
include('include-once-file.php');
require('include-once-file.php');

echo "Variável = {$variavel}<br>";
$variavel = "Variável alterada";
echo "Variável = {$variavel}<br>";

include('include-once-file.php');
echo "Variável = {$variavel}<br>";

$variavel = "Variável alterada novamente";
include_once('include-once-file.php');
echo "Variável = {$variavel}<br>";

require_once('include-once-file.php');
echo "Variável = {$variavel}<br>";
