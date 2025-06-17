<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;

class PerfilController implements InterfaceController
{
    public static function view()
    {
        return require_once "./Views/perfil/index.php";
    }
}