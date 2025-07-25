<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;

class CheckoutController implements InterfaceController
{
    public static function view(){
        return require_once "./Views/checkout/index.php";
    }
}