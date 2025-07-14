<?php
require_once "../../vendor/autoload.php";

use App\Models\Produto;
use App\Models\Usuario;
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

function favoritar($action, $id,){
    if($action === 'favoritar'){
        $user_id = $_SESSION['logado']['id'];
        $produto = new FavoritarProduto();
        $produto->favoritar($id, $user_id);

        if(!isset($_SESSION['favoritos'])){
            $_SESSION['favoritos'] = [];
        }

        if(!isset($_SESSION['favoritos'][$id])){
            $_SESSION['favoritos'][$id] = 'favoritado';
        }

        var_dump($_SESSION['favoritos']);

        return json_encode([
            'favoritos' => count($_SESSION['favoritos'])
        ]);
    }
}

function desfavoritar($action, $id){
    if($action === 'desfavoritar'){
        $userId = isset($_SESSION['logado']['id']) ? $_SESSION['logado']['id'] : 0;
        
    }
}