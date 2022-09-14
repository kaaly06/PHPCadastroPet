<?php
// index é a página inicial

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/PetController.php';
include 'Controller/DonoPetController.php';

switch($uri_parse)
{
    //rotas para pet

    case '/pet':
        PetController::index();
    break;

    case '/pet/form':
        PetController::form();
    break;

    case '/pet/form/save':
        PetController::save();
    break;

    case '/pet/delete':
        PetController::delete();
    break;

    default:
        echo "Erro 404";
    break;
}