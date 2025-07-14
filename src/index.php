<?php
declare(strict_types=1);
// evita erros de cabecalhos já enviados
ob_start();

session_start();
use App\Routes\Route;

require_once "../vendor/autoload.php";
require_once "Routes/index.php";
$path = $_SERVER['PATH_INFO'] ?? '/';

if($path == INDEX){
    header("Location: " . LOGIN);
}

Route::routes($path);
Route::isLogado($path);

