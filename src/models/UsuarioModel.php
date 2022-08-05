<?php

namespace src\models;

use src\DAO\UsuarioDAO;

class UsuarioModel
{
    public $id, $nome, $login, $senha;

    public $rows;

    public $request;
    public $json;



    public function save()
    {
        $dao = new UsuarioDAO();
        if(empty($this->id)){
            $dao->insert($this);
        }else{
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

    public static function colunas()
    {
        return [
            '0' => 'id',
            '1' => 'nome',
            '2' => 'cargo',
            '3' => 'perfil',
        ]; 
    }

    public static function countRows()
    {
        $dao = new UsuarioDAO();
        $dao->countRows();
    }

    public function returnJson()
    {
        $this->json = UsuarioModel::countRows();
    }
}
