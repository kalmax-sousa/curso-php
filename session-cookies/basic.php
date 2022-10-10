<div class="title">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'gabriel@zmail.com';
}

print_r($_SESSION);
?>

<p>
    <a href="/curso-php/session-cookies/basic-session-change.php">Alterar Sessão</a>
</p>
