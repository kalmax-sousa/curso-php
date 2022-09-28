<div class="title">If Else</div>

<?php

if(true){
    echo "Serei impresso <br>";
    echo "Serei impresso novamente? <br>";
}

if(true){
    echo "Verdadeiro <br>";
} else {
    echo "Falso <br>";
}

if(false){
    echo "Passo A <br>";
} else if(true){
    echo "Passo B <br>";
} elseif(true){
    echo "Passo C <br>";
} else{
    echo "Último passo <br>";
}

echo "Fim <br>";
