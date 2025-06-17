<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;
use App\Controllers\ProdutosList;


class ProdutoDetalhesController implements InterfaceController
{
    public static function view()
    {
        $id = (int) isset($_GET['id']) ? (int)$_GET['id'] : null;
        $produto = new ProdutosList;
        $produtos = $produto->getProducts();
       
        $IdProd = self::list($produtos, $id)['id'];
        $nome = self::list($produtos, $id)['nome'];
        $descricao = self::list($produtos, $id)['descricao'];
        $quantidade = self::list($produtos, $id)['quantidade'];
        $preco = self::list($produtos, $id)['preco'];
        $imagem = '../../Lib/img/produtos/'.self::list($produtos, $id)['imagem'];

        return require_once "./Views/produtos/detalhes.php";
    }


    public static function list($produtos, $id)
    {
        $produtoFiltrado = array_filter($produtos, function ($produto) use ($id) {
            return (int)$produto['id'] === (int)$id;
        });
        
        $produto = reset($produtoFiltrado); 

        return $produto;        
    }
}
