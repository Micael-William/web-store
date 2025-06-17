<?php
namespace App\Models;
use App\database\Conexao;
use PDO;

class Produto extends Conexao {
    private $table = "tb_produto";

    public function getAllProdutos(): array {
        $array = $this->getConexao()->query("SELECT * FROM {$this->table};");
        return $array->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduto($id) {
        $stmt = $this->getConexao()->prepare("SELECT * FROM {$this->table} WHERE id=:id;");
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addProdutos($user, $nome, $descricao, $preco, $quantidade, $imagem) {
        $sql = "INSERT INTO {$this->table} (user, nome, descricao, preco, quantidade, image)
        VALUES (:user, :nome, :descricao, :preco, :quantidade, :image)";

        $stmt = $this->getConexao()->prepare($sql);
        $stmt->bindValue(":user", $user);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":descricao", $descricao);
        $stmt->bindValue(":preco", $preco);
        $stmt->bindValue(":quantidade", $quantidade);
        $stmt->bindValue(":image", $imagem);
        
        return $stmt->execute();
    }

    public function updateProduct($id, $nome, $descricao, $preco, $quantidade, $imagem) {
        $sql = "UPDATE {$this->table} SET nome=:nome,
                                        descricao=:descricao,
                                        preco=:preco,
                                        quantidade=:quantidade,
                                        image=:imagem
                                        WHERE id=:id;";

        $stmt = $this->getConexao()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":descricao", $descricao);
        $stmt->bindValue(":preco", $preco);
        $stmt->bindValue(":quantidade", $quantidade);
        $stmt->bindValue(":imagem", $imagem);

        return $stmt->execute();
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM {$this->table} WHERE id=:id;";
        $stmt = $this->getConexao()->prepare($sql);
        $stmt->bindValue(":id", $id);

        return $stmt->execute();
    }
}