<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css"0>
        <link rel="stylesheet" href="assets/css/exercise.css"0>
        <title>Curso PHP - Cod3r</title>
    </head>
    <body>
        <header class="header">
            <h1>Curso PHP</h1>
            <h2>Índice dos Exercícios</h2>
        </header>
        <main class="main">
            <div class="content">
                <?php
                    require('menu.php');
                ?>
            </div>
        </main>
        <footer class="footer">
            CODER & KALMAX © <?= date('Y'); ?>
        </footer>

    </body>
</html>