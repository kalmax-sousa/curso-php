<div class="title">Arrays Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalizade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalizade" => "Bahia"
    ]
];

print_r($dados);
echo '<br>' . $dados[0]["idade"];
echo '<br>' . $dados[1]["idade"];

$dados[] = [
    "nome" => "Dona Florinda",
    "idade" => 30,
    "naturalizade" => "Cidade do México"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]["idade"];

$dados[2]["vizinho"] = "Chaves";
echo '<br>';
print_r($dados);

unset($dados[1]);
echo '<br>';
print_r($dados);
echo '<br>';

