<?php
namespace App\Controllers;
use App\Controllers\Roteamento;

class NotFoundController implements InterfaceController
{   
    public static function view()
    {
        return require_once "./Views/notFound/index.php";
    }
}