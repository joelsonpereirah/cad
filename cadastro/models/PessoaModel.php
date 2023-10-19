<?php
class PessoaModel {
        
    private $conn;

    public function __construct() {
        $db = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
        $this->conn = $db;
        
    }

    public function getAllPessoas() {
        $query = "SELECT * FROM pessoas";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPessoa($id) {
        $query = "SELECT * FROM pessoas WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function addPessoa($nome, $cpf, $data_nascimento){
       
        $query = "INSERT INTO pessoas (nome, cpf, data_nascimento) VALUES (?,?,?)";
        $stmt=$this->conn->prepare($query);
        
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $cpf);
        $stmt->bindValue(3, $data_nascimento);

        $stmt->execute();
    }

   public function deletePessoa($id){
    $query = "DELETE FROM pessoas WHERE id = ? ";
    $stmt = $this->conn->prepare($query);
    $stmt->bindValue(1, $id);

    $stmt->execute();
   }

   public function editarPessoa($id, $nome, $cpf, $data_nascimento){
    $query = "UPDATE pessoas SET nome = ?, cpf = ?, data_nascimento = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $cpf);
        $stmt->bindValue(3, $data_nascimento);
        $stmt->bindValue(4, $id);

        $stmt->execute();
   
   }
}
?>