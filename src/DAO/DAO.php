<?php 

namespace src\DAO;
use src\helpers\MySql;

class DAO {

    protected $conexao;

    public function __construct()
    {
        $this->conexao = MySql::conectar();
    }
}
