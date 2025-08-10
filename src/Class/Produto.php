<?php

namespace App\Class;

class Produto
{
    public function __construct(
        public int $id,
        public int $user_id ,
        public string $nome,
        public string $descricao,
        public int $preco,
        public int $quantidade,
        public string $imagem
    )
    {}
}