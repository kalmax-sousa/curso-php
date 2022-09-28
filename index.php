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
                <nav class="modules">
                    <div class="model green">
                        <h3>Módulo 01 - Básico</h3>
                        <ul>
                            <li>
                                <a href="exercise.php?dir=basic&file=ola">
                                    Olá PHP
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=basic&file=html">
                                    Integração HTML
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=basic&file=css">
                                    Integração CSS
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=basic&file=comments">
                                    Comentários PHP
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=basic&file=challenge">
                                    Desafio
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="model red">
                        <h3>Módulo 02 - Tipos</h3>
                        <ul>
                            <li>
                                <a href="exercise.php?dir=types&file=int">
                                    Tipo Inteiro
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=types&file=float">
                                    Tipo Float
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=types&file=arithmetic">
                                    Operações Aritméticas
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=types&file=precedence_challenge">
                                    Desafio Precedência
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=types&file=string">
                                    Tipo String
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=types&file=string_challenge">
                                    Desafio String
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=types&file=boolean">
                                    Tipo Booleano
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=types&file=conversions">
                                    Conversões
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="model blue">
                        <h3>Módulo 03 - Variáveis</h3>
                        <ul>
                            <li>
                                <a href="exercise.php?dir=variables&file=basic">
                                    Variávies
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=variables&file=equation_challenge">
                                    Desafio Equação
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=variables&file=assignments">
                                    Atribuições
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=variables&file=interpolation">
                                    Interpolação
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=variables&file=variable_variables">
                                    Variáveis variáveis
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=variables&file=variable_variables_challenge">
                                    Desafio variáveis variáveis
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=variables&file=reference">
                                    Valor vs Referência
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=variables&file=constants">
                                    Constantes
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="model purple">
                        <h3>Módulo 04 - Controle</h3>
                        <ul>
                            <li>
                                <a href="exercise.php?dir=control&file=if_else">
                                    If Else
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=control&file=relational">
                                    Operadores Relacionais
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=control&file=pi_challenge">
                                    Desafio PI
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=control&file=logical">
                                    Operadores Lógicos
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=control&file=logical_challenge">
                                    Desafio Op. Lógicos
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=control&file=ternary">
                                    Operador Ternário
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=control&file=switch">
                                    Switch
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=control&file=switch_challenge">
                                    Desafio Switch
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </main>
        <footer class="footer">
            CODER & KALMAX © <?= date('Y'); ?>
        </footer>

    </body>
</html>