<div class="title">Desafio Tabela 1</div>

<?php
$matrix = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];


foreach ($matrix as $linha){
    foreach ($linha as $valor){
        echo "$valor ";
    }

    echo "<br>";
}
?>

<table>
    <?php
        foreach ($matrix as $linha){
            echo "<tr>";
            foreach ($linha as $value){
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
    ?>

<table>
    <?php
        foreach ($matrix as $indice => $linha){
            $style = $indice % 2 === 1 ? 'background-color: lightblue;' : '';
            echo "<tr style='{$style}'>";
            foreach ($linha as $value){
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td{
        padding: 10px 20px;
    }
</style>
