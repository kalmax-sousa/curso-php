<div class="title">Desafio Módulo</div>

<?php
require_once('User.php');
$usuario = new User('Gustavo Mendonça', 21, 'gust_mend');
$usuario->show();

$usuario = null;