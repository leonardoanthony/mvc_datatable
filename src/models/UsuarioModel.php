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
        
        $quantidade_usuarios = $dao->getCountUsersDatatable($request);

        $dados_usuario = $dao->getUsersDatatable($request, $this->colunas);

        foreach($dados_usuario as $usuario){
            extract($usuario);
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
