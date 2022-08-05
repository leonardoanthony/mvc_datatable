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
        $sql = "SELECT * FROM {$this->table} LIMIT 1";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `id` = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchObject();
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
}