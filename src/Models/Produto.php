<?php
namespace App\Models;

class Produto
{
    public function __construct(
        public int $id,
        public string $nome,
        public string $descricao,
        public string $preco,
        public int $quantidade,
        public string $imagemyyy
    )
    {}
}