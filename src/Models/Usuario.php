<?php
declare(strict_types=1);

namespace App\Models;

class Usuario
{
    public function __construct(
        public int $id,
        public string $nome,
        public string $sobrenome,
        public string $email,
        public string $password,
        public string $telefone,
    ){}
}