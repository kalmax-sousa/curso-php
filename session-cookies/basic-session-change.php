<?php
session_start();
print_r($_SESSION);
?>



<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>

<?php
    $_SESSION['email'] = "gabrielfilho@emailaz.com.br";
?>

<p>
    <a href="basic.php">Voltar</a>
</p>
<p>
    <a href="basic-session-clear.php">Limpar Sessão</a>
</p>
