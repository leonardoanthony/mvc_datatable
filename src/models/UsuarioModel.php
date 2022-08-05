<?php

namespace src\models;

use src\DAO\UsuarioDAO;

class UsuarioModel
{
    public $id, $nome, $login, $senha;

    public $rows;

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

}
