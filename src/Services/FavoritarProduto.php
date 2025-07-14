<?php
namespace App\Services;

use App\database\Conexao;
use App\Models\Produto;
use App\Models\Usuario;

class FavoritarProduto
{
    public function favoritar($produto_id, $id)
    {
        $favorito = "SELECT * FROM tb_favoritos WHERE user_id=:id AND id_produto=:produto_id";
        $existe = Conexao::getConexao()->prepare($favorito);
        $existe->bindParam(":id", $id);
        $existe->bindParam(":produto_id", $produto_id);
        $existe->execute();

        if(!$existe->rowCount() > 0){
            $sql = "INSERT INTO tb_favoritos(id_produto, user_id)VALUES(:id_produto, :user_id)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindParam(":id_produto", $produto_id);
            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
        } 
    }
}