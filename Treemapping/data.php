<?php
// Exemplo de dados de ranking das linguagens de programação cria um array associativo
// Sub-arrays, cada um representando uma linguagem de programação e popularidade.
$data = [
    ["name" => "JavaScript", "popularity" => 67.7],
    ["name" => "Python", "popularity" => 44.1],
    ["name" => "Java", "popularity" => 40.2],
    ["name" => "C#", "popularity" => 31.4],
    ["name" => "PHP", "popularity" => 26.2],
    ["name" => "C++", "popularity" => 23.5],
    ["name" => "TypeScript", "popularity" => 22.4],
    ["name" => "Ruby", "popularity" => 9.2],
    ["name" => "Swift", "popularity" => 6.5],
    ["name" => "Objective-C", "popularity" => 4.7]
];


//Cabeçalho JSON: Define o cabeçalho HTTP para informar ao navegador que o conteúdo é JSON.
header('Content-Type: application/json');
echo json_encode($data);

//Conversão para JSON: Usa json_encode para converter o array PHP em uma string JSON e a imprime (echo).
?>


