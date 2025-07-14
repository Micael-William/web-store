<?php
namespace App\Routes;

use App\Controllers\Auth;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\CadastroController;
use App\Controllers\CarrinhoController;
use App\Controllers\LogoutController;
use App\Controllers\NotFoundController;
use App\Controllers\OfertaController;
use App\Controllers\PerfilController;
use App\Controllers\ProdutoDetalhesController;

class Route
{
    public static function routes($route)
    {
        switch(strtolower($route)){
            case '/':
                LoginController::view();
                LoginController::request();
            break;
            case '/login':
               LoginController::view();
               LoginController::request();
            break;
            case '/cadastro':
                CadastroController::view();
                break;
             case '/home':
                HomeController::view();
                break;
            case '/logout':
                Auth::authLogout();
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
            case '/ofertas':
                OfertaController::view();
                break;
            default:
                NotFoundController::view();
                break;
        }
    }

    public static function isLogado($path)
    {
        
        switch($path){
            case HOME:
                if(!array_key_exists('logado', $_SESSION)){
                    header('Location:' . LOGIN);
                }
            break;
            case CART:
                if(!array_key_exists('logado', $_SESSION)){
                    header('Location:' . LOGIN);
                }
            break;
            case PROFILE:
                if(!array_key_exists('logado', $_SESSION)){
                    header('Location:' . LOGIN);
                }
            break;
            case SETTINGS:
                if(!array_key_exists('logado', $_SESSION)){
                    header('Location:' . LOGIN);
                }
            break;
        }
    }
}
