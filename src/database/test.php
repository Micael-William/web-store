<?php
require_once "../../vendor/autoload.php";
use App\Controllers\ProdutosList;
use App\Models\Produto;

$produtos = new ProdutosList;
$produtos->getProducts();

foreach ($produtos as $produto){
   $model = new Produto;
   $model->addProdutos($produto['id'], $produto['nome'], $produto['descricao'], $produto['preco'], $produto['quantidade'], $produto['imagem']);
}