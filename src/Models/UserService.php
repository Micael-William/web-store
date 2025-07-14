<?php
declare(strict_types=1);
namespace App\Models;
use App\database\Conexao;
use App\Models\Usuario;
use PDO;

class UserService
{
    public function create(Usuario $usuario): int
    {
        $sql = "INSERT INTO tb_user(nome, sobrenome, email, senha, data_nascimento, telefone, endereco, cep, numero)
        VALUES (:nome, :sobrenome, :email, :senha, :data_nascimento, :telefone, :endereco, :cep, :numero)";

        $stmt = Conexao::getConexao()->prepare($sql);

        $stmt->bindParam(":nome", $usuario->nome);
        $stmt->bindParam(":sobrenome", $usuario->sobrenome);
        $stmt->bindParam(":email", $usuario->email);
        $stmt->bindParam(":senha", password_hash($usuario->password, PASSWORD_ARGON2ID));
        $stmt->bindParam(":telefone", $usuario->telefone);
        $stmt->execute();
        
        return $stmt->lastInsertId();
    }

    public function read(Usuario $usuario): array
    {
        $sql = "SELECT id, email FROM tb_user WHERE email=:email";

        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindParam(":email", $usuario->email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update(Usuario $usuario, $id): void
    {
        $sql = "UPDATE tb_user SET nome=:nome, sobrenome=:sobrenome, email=:email, senha=:senha, data_nascimento=:data_nascimento, telefone=:telefone, endereco=:endereco, cep=:cep, numero=:numero WHERE id=:id";

        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindParam(":email", $usuario->email);
        $stmt->bindParam(":id", $usuario->id);
        $stmt->execute();
    }

    public function delete(Usuario $usuario): void
    {
        $sql = "DELETE FROM tb_user WHERE id=:id";

        $stmt = Conexao::getConexao()->prepare($sql);
        
        $stmt->bindParam(":id", $usuario->id);

        $stmt->execute();
    }

}