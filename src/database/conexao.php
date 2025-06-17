<?php
namespace App\database;

class Conexao
{
    public function getConexao()
    {
        $caminhoBanco = __DIR__ . '/database.sqlite';
        return new \PDO('sqlite:' . $caminhoBanco);
    }
}

$con = new Conexao;
$con->getConexao()->exec("DROP TABLE IF EXISTS tb_produto");
$con->getConexao()->exec(
    "CREATE TABLE IF NOT EXISTS tb_produto 
    (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user INTEGER NOT NULL,
        nome TEXT NOT NULL,
        descricao TEXT NOT NULL,
        preco TEXT NOT NULL,
        quantidade INTEGER NOT NULL,
        image TEXT NOT NULL
    );"
);

