<?php
declare(strict_types=1);

namespace App\Class;

class ValidaEmail
{
    public function validaEmail($email): bool
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}