<?php
namespace App\Services;

use App\database\Conexao;
use App\Models\Produto;
use App\Models\Usuario;
use PDO;

class FavoritarProduto
{
    public function favoritar($user_id, $produto_id)
    {
        $favorito = "SELECT * FROM tb_produto WHERE id_user=:id_user AND id_produto=:produto_id";
        $existe = Conexao::getConexao()->prepare($favorito);
        $existe->bindParam(":id_user", $user_id);
        $existe->bindParam(":produto_id", $produto_id);
        $existe->execute();
    
        if(!$existe->rowCount() > 0){
            $sql = "INSERT INTO tb_produto(id_user)VALUES(:id_user)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindParam(":id_user", $user_id);
            $stmt->execute();
        } 
    }

    public function listFavoritos($user_id)
    {
        $favorito = "SELECT * FROM tb_favoritos WHERE user_id=:id_user";
        $existe = Conexao::getConexao()->prepare($favorito);
        $existe->bindParam(":id_user", $user_id);
        $existe->execute();

        return $existe->fetchAll(PDO::FETCH_ASSOC);
    }
}