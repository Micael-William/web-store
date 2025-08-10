<?php
declare(strict_types=1);
namespace App\Models;
use PDO;

class ProdutoDAO {
    private $table = "tb_produto";
    private $conection;

    public function __construct($conection)
    {
        $this->conection = $conection;
    }

    public function all(): array 
    {
        $products = $this->conection::getConexao()->query("SELECT * FROM {$this->table};");
        return $products->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductByID(int $id): array
    {
        $stmt = $this->conection::getConexao()->prepare("SELECT * FROM {$this->table} WHERE id=:id;");
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct(string $nome, string $descricao, float $preco, int $quantidade, string $imagem): void
    {
        $sql = "INSERT INTO {$this->table} (user, nome, descricao, preco, quantidade, image)
        VALUES (:user, :nome, :descricao, :preco, :quantidade, :imagem)";

        $stmt = $this->conection::getConexao()->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":descricao", $descricao);
        $stmt->bindValue(":preco", $preco);
        $stmt->bindValue(":quantidade", $quantidade);
        $stmt->bindValue(":imagem", $imagem);
        $stmt->execute();
    }

    public function updateProduct(int $id, string $nome, string $descricao, float $preco, int $quantidade, string $imagem): void
    {
        $sql = "UPDATE {$this->table} SET nome=:nome,
                                        descricao=:descricao,
                                        preco=:preco,
                                        quantidade=:quantidade,
                                        image=:imagem
                                        WHERE id=:id;";

        $stmt = $this->conection::getConexao()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":descricao", $descricao);
        $stmt->bindValue(":preco", $preco);
        $stmt->bindValue(":quantidade", $quantidade);
        $stmt->bindValue(":imagem", $imagem);
        $stmt->execute();
    }

    public function deleteProduct(int $id): void
     {
        $sql = "DELETE FROM {$this->table} WHERE id=:id;";
        $stmt = $this->conection::getConexao()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }
}