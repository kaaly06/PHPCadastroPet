<?php

class PetDAO
{
    private $conexao;

    function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=mydb";
        $user = "root";
        $pass = "etecjau";

        $this->conexao = new PDO($dsn, $user, $pass);
    }
    
    function insert(PetModel $model) 
    {    
        $sql = "INSERT INTO animal
                (nome, data_nascimento, raca, porte) 
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->data_nascimento);
        $stmt->bindValue(3, $model->raca);
        $stmt->bindValue(4, $model->porte);

        $stmt->execute();
    }

    public function update(PetModel $model)
    {
        $sql = "UPDATE animal SET nome=?, data_nascimento=?, raca=?, porte=? WHERE id=?"; 

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->data_nascimento);
        $stmt->bindValue(3, $model->raca);
        $stmt->bindValue(4, $model->porte);
        $stmt->bindValue(5, $model->id);
        $stmt->execute();
    }

    public function select()
    {      
        $sql = "SELECT * FROM animal";

        $stmt = $this -> conexao -> prepare ($sql);
        $stmt -> execute ();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }


    public function selectById(int $id)
    {
        $sql = "SELECT * FROM animal WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }


    public function delete(int $id)
    {
        $sql = "DELETE FROM animal WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}