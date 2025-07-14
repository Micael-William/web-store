<?php
declare(strict_types=1);
namespace App\Controllers;

class Mail
{
    public function send(string $email, string $mensagem)
    {
        echo "****************************************";
        echo "E-mail enviado para: " . $email . PHP_EOL;
    }
}