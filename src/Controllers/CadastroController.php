<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;

class CadastroController implements InterfaceController
{   
    public static function view()
    {
        return require_once "./Views/cadastro/index.php";
    }
}