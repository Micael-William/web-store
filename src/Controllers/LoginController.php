<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;

class LoginController implements InterfaceController
{   
    public static function view()
    {
        return require_once "./Views/login/index.php";
    }
}