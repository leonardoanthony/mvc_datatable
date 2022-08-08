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
    
    public static function list()
    {
        $model = new UsuarioModel();
        $model->buildJson($_REQUEST);
        parent::render('Usuario/ListaDatatable', $model);
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
        $model->save($_POST);

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

    public static function edit()
    {
        $model = new UsuarioModel;

        if(isset($_GET['id'])){
            $model->buildEditJson($_GET['id']);
        }

        if(isset($_GET['table'])){
            $model->getConfigTable($_GET['table']);
            self::listTable($model);
        }

        parent::render('Usuario/editarUsuario', $model);
    }

    private static function listTable($model)
    {
        $newModel = new UsuarioModel();
        $newModel->table = $model->table;
        parent::render('Usuario/ListaTabelaConfigUsuario', $newModel);
    }

}
