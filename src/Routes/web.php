<?php
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\CadastroController;
use App\Controllers\CarrinhoController;
use App\Controllers\LogoutController;
use App\Controllers\NotFoundController;
use App\Controllers\PerfilController;
use App\Controllers\ProdutoDetalhesController;

function routes($route){
    switch(strtolower($route)){
        case '/':
            LoginController::view();
        break;
        case '/login':
           LoginController::view();
        break;
        case '/cadastro':
            CadastroController::view();
            break;
         case '/home':
            HomeController::view();
            break;
        case '/logout':
            LogoutController::view();
            break;
        case '/detalhes':
            ProdutoDetalhesController::view();
            break;
        case '/carrinho':
            CarrinhoController::view();
            break;
        case '/perfil':
            PerfilController::view();
            break;
        default:
            NotFoundController::view();
            break;
    }
}