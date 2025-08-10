<?php

namespace App\Class;

class Usuario
{
    public function __construct(
        public int | null $id,
        public string | null $nome,
        public string | null $sobrenome,
        public string | null $email,
        public string | null $password,
        public string | null $telefone,
    ){}
}