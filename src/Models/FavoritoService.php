<?php
namespace App\Models;

use App\database\Conexao;
use PDO;

class FavoritoService
{
    public function listFavoritos($id): array
    {
        $stmt = Conexao::getConexao()->prepare("SELECT * FROM tb_favoritos f INNER JOIN tb_produto p ON f.id_produto = p.id WHERE f.user_id =:user_id");
        $stmt->bindParam(":user_id", $id);   
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}