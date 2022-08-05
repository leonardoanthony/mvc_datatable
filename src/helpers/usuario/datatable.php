<?php 
//? Incluir a conexão com banco de dados

namespace src\helpers;

include_once '/helpers/MySql.php';

$dados_requisicao = $_REQUEST;

//?ordenar as colunas
$colunas = [
    '0' => 'id',
    '1' => 'nome',
    '2' => 'cargo',
    '3' => 'perfil',
];


//? Quantidade total de registro no banco
$query_quantidade_usuarios = "SELECT count(id_usuario) as qnt_usuarios FROM usuario";
if(!empty($dados_requisicao['search']['value'])) {
    $query_quantidade_usuarios .= " WHERE `id_usuario` LIKE '%".$dados_requisicao['search']['value']."%'";
    $query_quantidade_usuarios .= " OR `nome` LIKE '%".$dados_requisicao['search']['value']."%'";
    $query_quantidade_usuarios .= " OR `nomecargo` LIKE '%".$dados_requisicao['search']['value']."%'";
    $query_quantidade_usuarios .= " OR `perfil` LIKE '%".$dados_requisicao['search']['value']."%'";
}
$result_qtn = MySql::conectar()->prepare($query_quantidade_usuarios);
$result_qtn->execute();
$quantidade_usuarios = $result_qtn->fetch(\PDO::FETCH_ASSOC);

//? Recuperando os dados do banco
$query_usuarios = "SELECT 
                        `id_usuario` as id, 
                        `nome`, 
                        `nomecargo` as cargo,
                        `perfil` 
                    FROM usuario";

if(!empty($dados_requisicao['search']['value'])) {
    $query_usuarios .= " WHERE `id_usuario` LIKE '%".$dados_requisicao['search']['value']."%'";
    $query_usuarios .= " OR `nome` LIKE '%".$dados_requisicao['search']['value']."%'";
    $query_usuarios .= " OR `nomecargo` LIKE '%".$dados_requisicao['search']['value']."%'";
    $query_usuarios .= " OR `perfil` LIKE '%".$dados_requisicao['search']['value']."%'";
}

//? Lógica para definir a ordenação das colunas;
$query_usuarios .= " ORDER BY ". $colunas[$dados_requisicao['order'][0]['column']]." "
                .$dados_requisicao['order'][0]['dir']
                // . " LIMIT 2;";
                . " LIMIT ".$dados_requisicao['start'].", ".$dados_requisicao['length'].";";

$result_data = MySql::conectar()->prepare($query_usuarios);

$result_data->execute();

while($row_user = $result_data->fetch(\PDO::FETCH_ASSOC)) {
    extract($row_user);
    $registro = [];
    $registro[] = $id;
    $registro[] = $nome;
    $registro[] = $cargo;
    $registro[] = $perfil;
    $dados[] = $registro;
}

//? Criar o array de informação a ser retornado
$resposta = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($quantidade_usuarios['qnt_usuarios']),
    "recordsFiltered" => intval($quantidade_usuarios['qnt_usuarios']),
    "data" => $dados,
];

//? Retornar os dados em forma de objeto javascript;
echo json_encode($resposta);
