<?php

namespace src\DAO;

use src\models\UsuarioModel;

class UsuarioDAO extends DAO
{

    private $table = 'usuario';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert(UsuarioModel $model)
    {
        $sql = "INSERT INTO {$this->table} (`nome`, `login`, `senha`)VALUES (?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute([$model->nome, $model->login, $model->senha]);
    }

    public function update(UsuarioModel $model)
    {
        $sql = "UPDATE {$this->table} SET `nome` = ?, `login` = ?, `senha` = ? WHERE `id` = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute([
            $model->nome,
            $model->login,
            $model->senha,
            $model->id,
        ]);
    }

    public function selectAll()
    {
        $sql = "SELECT  `id_usuario` as id, 
                        `nome`, 
                        `nomecargo` as cargo,
                        `perfil`  FROM {$this->table} LIMIT 2";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `id_usuario` = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM {$this->table} where `id` = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute([$id]);
    }

    public function countRows()
    {
        $sql = "SELECT count(id_usuario) as qnt_usuarios FROM {$this->table}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getCountUsersDatatable($request)
    {
        $sql = "SELECT count(id_usuario) as qnt_usuarios FROM usuario";
        if(!empty($request['search']['value'])) {
            $sql .= " WHERE `id_usuario` LIKE '%".$request['search']['value']."%'";
            $sql .= " OR `nome` LIKE '%".$request['search']['value']."%'";
            $sql .= " OR `nomecargo` LIKE '%".$request['search']['value']."%'";
            $sql .= " OR `status` LIKE '%".$request['search']['value']."%'";
        }
        $result_qtn = $this->conexao->prepare($sql);
        $result_qtn->execute();
        return $result_qtn->fetch(\PDO::FETCH_ASSOC);
    }

    public function getUsersDatatable($request, $colunas)
    {
        $sql = "SELECT  `id_usuario` as id, 
                        `nome`, 
                        `nomecargo` as cargo,
                        `perfil`, 
                        `status` 
                FROM usuario";
        
        if(!empty($request['search']['value'])) {
            $sql .= " WHERE `id_usuario` LIKE '%".$request['search']['value']."%'";
            $sql .= " OR `nome` LIKE '%".$request['search']['value']."%'";
            $sql .= " OR `nomecargo` LIKE '%".$request['search']['value']."%'";
            $sql .= " OR `status` LIKE '%".$request['search']['value']."%'";
        }
        
        //? Lógica para definir a ordenação das colunas;
        $sql .= " ORDER BY ". $colunas[$request['order'][0]['column']]." "
                        .$request['order'][0]['dir']
                        // . " LIMIT 2;";
                        . " LIMIT ".$request['start'].", ".$request['length'].";";
                        
        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}