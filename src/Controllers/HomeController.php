<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;
use App\Models\Produto;
use App\Controllers\ProdutosList;

class HomeController implements InterfaceController
{
    public static function view()
    {
        $model = new Produto;
        $produto = new ProdutosList;
        $produtos = $produto->getProducts();
        return require_once "./Views/home/index.php";
    }
}