<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;

class CarrinhoController implements InterfaceController
{
    public static function view()
    {
        return require_once "./Views/carrinho/index.php";
    }
}