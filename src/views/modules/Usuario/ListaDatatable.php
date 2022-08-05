<?php

var_dump($model->json);


//? Criar o array de informação a ser retornado
$resposta = [
    "draw" => 1,
    "recordsTotal" => 10,
    "recordsFiltered" => 10,
    "data" => [
        '0' => 'id',
        '1' => 'nome',
        '2' => 'cargo',
        '3' => 'perfil',
    ],
];

//? Retornar os dados em forma de objeto javascript;
echo json_encode($resposta);