<?php

namespace src\controllers;

use src\models\UsuarioModel;

class UsuarioController extends Controller
{

    public static function index()
    {
        $model = new UsuarioModel();
        $model->getAllRows();
        parent::render('Usuario/ListarUsuarios', $model);
    }

    public static function form()
    {
        $model = new UsuarioModel();

        if(isset($_GET['id'])){
            $model = $model->getByID((int) $_GET['id']);
        }

        parent::render('Usuario/CadastrarUsuario', $model);
    }

    public static function save()
    {
        $model =  new UsuarioModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->login = $_POST['login'];
        $model->senha = $_POST['senha'];

        $model->save();

        header("Location: /usuarios");
    }

    public static function delete()
    {
        $model = new UsuarioModel();

        if(isset($_GET['id'])){
            $model->delete((int) $_GET['id']);
        }

        header("Location: /usuarios");
    }
}
