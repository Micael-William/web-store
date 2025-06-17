<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;

class NotFoundController implements InterfaceController
{   
    public static function view()
    {
        return require_once "./Views/notFound/index.php";
    }
}