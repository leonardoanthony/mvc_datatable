<?php

namespace src\models;

use src\DAO\UsuarioDAO;

class UsuarioModel
{
    public $id, $nome, $login, $senha, $cargo, $perfil, $endereco, $bairro, $cidade, $estado, $fone, $fone2, $email;
    public $rows;
    public $table;
    public $request;
    public $json;

    public $colunas = [
        '0' => 'id',
        '1' => 'nome',
        '2' => 'cargo',
        '3' => 'perfil',
        '4' => 'status'
    ];

    public function save()
    {
        $dao = new UsuarioDAO();


        var_dump($this);
        die();

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

    public function getConfigTable($table)
    {
        $dao = new UsuarioDAO();
        $this->table = $dao->getTable($table);
    }

    public function buildJson($request)
    {

        $dao = new UsuarioDAO();
        
        $quantidade_usuarios = $dao->getCountUsersDatatable($request);

        $dados_usuario = $dao->getUsersDatatable($request, $this->colunas);

        foreach($dados_usuario as $key => $usuario){
            extract($usuario);
            $registro = [];
            $registro[] = $key + 1;
            $registro[] = $nome;
            $registro[] = $cargo;
            $registro[] = $perfil;
            if($status){
                $registro[] = '<span class="badge badge-success">Ativo</span>';
                $registro[] = '<button class="btn btn-sm btn-danger"><i class="fa fa-square"></i></button>';      
            }else{
                $registro[] = '<span class="badge badge-danger">Desativado</span>';
                $registro[] = '<button class="btn btn-sm btn-success"><i class="fa fa-check-square"></i></button>';
            }
            $registro[] = '<button class="btn btn-sm btn-warning btn-edit" onclick="editUsuario('.$id.')"><i class="fa fa-edit"></i> </button><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>';      
            $dados[] = $registro;
        }
      
        
        //? Criar o array de informação a ser retornado
        $resposta = [
            "draw" => intval($request['draw']),
            "recordsTotal" => intval($quantidade_usuarios['qnt_usuarios']),
            "recordsFiltered" => intval($quantidade_usuarios['qnt_usuarios']),
            "data" => $dados,
        ];

        $this->json = json_encode($resposta);

    }

    public function buildEditJson($id)
    {
        $dao = new UsuarioDAO();

        $user = $dao->selectById($id);

        if($user){
            $resposta = [
                'status' => true,
                'data' => $user,
            ];
        }else{
            $resposta = [
                'status' => false,
                'message' => 'Usuário não encontrado, contate o suporte',
            ];
        }

        $this->json = json_encode($resposta);
    }

}
