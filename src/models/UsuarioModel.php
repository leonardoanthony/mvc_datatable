<?php

namespace src\models;

use src\DAO\UsuarioDAO;
use src\helpers\MySql;

class UsuarioModel
{
    public $id, $nome, $login, $senha, $rows;
    public $request;
    public $json;

    public $colunas = [
        '0' => 'id',
        '1' => 'nome',
        '2' => 'cargo',
        '3' => 'perfil',
    ];

    public function save()
    {
        $dao = new UsuarioDAO();
        if (empty($this->id)) {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new UsuarioDAO();
        $this->rows = $dao->selectAll();   
    }

    public function getByID(int $id)
    {
        $dao = new UsuarioDAO();
        $obj = $dao->selectById($id); 
        return ($obj) ? $obj : new UsuarioModel();
    }

    public function delete(int $id)
    {
        $dao = new UsuarioDAO();
        $dao->delete($id);
    }

    public static function countRows()
    {
        $dao = new UsuarioDAO();
        $dao->countRows();
    }

    public function buildJson($request)
    {

        $requestData = $request;

        $colunas = $this->colunas;

        $dao = new UsuarioDAO();
        
        
        //? Quantidade total de registro no banco

        $quantidade_usuarios = $dao->getUsersLike($request);
        
        //? Recuperando os dados do banco
        $query_usuarios = "SELECT 
                                `id_usuario` as id, 
                                `nome`, 
                                `nomecargo` as cargo,
                                `perfil` 
                            FROM usuario";
        
        if(!empty($requestData['search']['value'])) {
            $query_usuarios .= " WHERE `id_usuario` LIKE '%".$requestData['search']['value']."%'";
            $query_usuarios .= " OR `nome` LIKE '%".$requestData['search']['value']."%'";
            $query_usuarios .= " OR `nomecargo` LIKE '%".$requestData['search']['value']."%'";
            $query_usuarios .= " OR `perfil` LIKE '%".$requestData['search']['value']."%'";
        }
        
        //? Lógica para definir a ordenação das colunas;
        $query_usuarios .= " ORDER BY ". $colunas[$requestData['order'][0]['column']]." "
                        .$requestData['order'][0]['dir']
                        // . " LIMIT 2;";
                        . " LIMIT ".$requestData['start'].", ".$requestData['length'].";";
        
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
            "draw" => intval($requestData['draw']),
            "recordsTotal" => intval($quantidade_usuarios['qnt_usuarios']),
            "recordsFiltered" => intval($quantidade_usuarios['qnt_usuarios']),
            "data" => $dados,
        ];

        $this->json = json_encode($resposta);

    }
}
