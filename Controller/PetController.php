<?php

class PetController 
{
    public static function index() 
    {
        include 'Model/PetModel.php';
        $model = new PetModel();
        $model->getAllRows();
        include 'View/modules/Pet/PetLista.php';
    }

    public static function form()
    {
        include 'Model/PetModel.php';
        $model = new PetModel();

        if(isset($_GET['id'])) //vendo se tem alguma variável $_GET
        $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Pet/PetForm.php';
    }

    public static function save()
    {
        include 'Model/PetModel.php';

        $model = new PetModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->data_nascimento = $_POST['data_nascimento'];
        $model->raca = $_POST['raca'];
        $model->porte = $_POST['porte'];

        $model->save();

        header("Location: /pet");
    }

    public static function delete()
    {
        include 'Model/PetModel.php';
        $model = new PetModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /pet"); 
    }
}

