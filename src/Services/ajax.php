<?php
session_start();
require_once "funcoes.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    $id = $_POST['id'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $preco = $_POST['preco'] ?? '';
    $imagem = $_POST['imagem'] ?? '';

    adicionar($action, $id, $nome, $preco, $imagem);
    desfavoritar($action, $id);
}
$action = $_GET['action'] ?? '';

$id = $_GET['id'] ?? '';

favoritar($action, $id);

