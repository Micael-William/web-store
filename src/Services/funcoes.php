<?php
require_once "../../vendor/autoload.php";

use App\Models\Produto;
use App\Models\Usuario;
use App\Services\Favoritar;
use App\Services\FavoritarProduto;

function adicionar($action, $id, $nome, $preco, $imagem){
    if ($action === 'adicionar') {
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];
        }

        if (!isset($_SESSION['carrinho'][$id])) {
            $_SESSION['carrinho'][$id] = [
                'nome' => $nome,
                'preco' => $preco,
                'imagem' => $imagem,
                'quantidade' => 1
            ];
        } else {
            $_SESSION['carrinho'][$id]['quantidade']++;
        }

        return json_encode([
            'quantidade' => count($_SESSION['carrinho'])
        ]);
    }
}
 
 
function favoritar($action, $id, $index) {
    
    if ($action === 'favoritar') {

        if(!isset($_SESSION['favoritos'])){
            $_SESSION['favoritos'] = [];
        }

        if(!isset($_SESSION['favoritos'][$id])){
            $_SESSION['favoritos'][$id] = [
                'id' => $id
            ];
        }


        if (isset($_SESSION['favoritos'])) {
            foreach ($_SESSION['favoritos'] as $fav) {
              $favoritosIds[] = (int) $fav['id'];
              $favoritos= new Favoritar();
              $favoritos->setFavoritos($favoritosIds);
            }
        }


        var_dump($_SESSION['favoritos']);
    }
}


function desfavoritar($action, $id, $index){
    if($action === 'desfavoritar'){

        if($id){
            if(isset($_SESSION['favoritos'])){
                unset( $_SESSION['favoritos'][$index]);
                array_values($_SESSION['favoritos']);
                var_dump($_SESSION['favoritos']);
                // return json_encode($_SESSION['favoritos']);
            }
        }
    }
}