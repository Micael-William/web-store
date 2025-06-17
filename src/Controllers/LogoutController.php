<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;

class LogoutController implements InterfaceController
{   
    public static function view()
    {
        header("Location: /");
    }
}