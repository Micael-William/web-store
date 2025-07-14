<?php

namespace App\Models;

use App\database\Conexao;
use App\Models\Usuario;

class verificaEmail
{
    public  function  verificaEmail(Usuario $usuario)
    {
        $con = new Conexao();
        $stmt = $con->getConexao()->prepare("SELECT email FROM tb_user WHERE email=:email");
        $stmt->bindvalue(':email', $usuario->email);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}