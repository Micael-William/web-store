<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;
use App\Controllers\ProdutosList;
use App\Models\ProdutoService;

class HomeController implements InterfaceController
{
    public static function view()
    {
        $model = new ProdutoService;
        $produto = new ProdutosList;
        $produtos = $produto->getProducts();
        return require_once "./Views/home/index.php";
    }
}