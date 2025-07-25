<?php
namespace App\Controllers;

use App\Configurations\Debug;
use App\Controllers\InterfaceController;
use App\Models\FavoritoService;
use App\Models\ProdutoService;
use App\Services\Favoritar;
use App\Services\FavoritarProduto;

class HomeController implements InterfaceController
{
    public static function view()
    {
        $id = isset($_SESSION['logado']) ? $_SESSION['logado']['id'] : null;
        $favoritos = new FavoritarProduto();
        $itens = $favoritos->listFavoritos($id);

        $model = new ProdutoService;
        $produtos = $model->getAllProdutos();

        $array = [];

        foreach($itens as $item){
            $array[] = $item['id_produto'];
        }

    
        return require_once "./Views/home/index.php";
    }

    public function list($id){
        return 'id do produto favoritado:' .$id;
    }
    
}