<div class="title">Desafio Switch</div>

<form action="#" method="post">
    <div>
        <label for="conversao">Trabalho 1 (Terça):</label>
        <input type="text" name="param">
        <select name="conversao" id="conversao">
            <option value="km-milha">Km > Milha</option>
            <option value="milha-km">Milha > Km</option>
            <option value="metro-km">Metros > Km</option>
            <option value="km-metro">Km > Metros</option>
            <option value="c-f">Celsius > Fahrenheit</option>
            <option value="f-c">Fahrenheit > Celsius</option>
        </select>
    </div>
    <button type="submit">Calcular</button>
</form>

<style>
    form  >*{
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_C_F = 1.8;

$param = $_POST['param'] ?? 0;

switch($_POST['conversao']){
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia Km(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
        break;
    case 'c-f':
        $conversao = $param * FATOR_C_F + 32;
        $mensagem = "{$param}ºC = {$conversao}ºF";
        break;
    case 'f-c':
        $conversao = ($param - 32) / FATOR_C_F;
        $mensagem = "{$param}ºF = {$conversao}ºC";
        break;
    default:
        $mensagem = "Nenhum valor calculado";
}

echo "<p>$mensagem</p>";
