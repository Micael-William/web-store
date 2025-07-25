<?php
session_start();
require_once "funcoes.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    $id = $_POST['id'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $preco = $_POST['preco'] ?? '';
    $imagem = $_POST['imagem'] ?? '';
}




if($_SERVER['REQUEST_METHOD'] === 'GET'){
    
    $id = $_GET['id'] ?? '';
    $index = $_GET['indice'] ?? '';
    $action = $_GET['action'] ?? '';

    favoritar($action, $id, $index);
    desfavoritar($action, $id, $index); 
}

// if($_SERVER['REQUEST_METHOD'] === 'GET'){
    
//     $id = $_GET['id'] ?? '';
//     $index = $_GET['indice'] ?? '';
//     $action = $_GET['action'] ?? '';
//     desfavoritar($action, $id, $index); 
// }